<?php

namespace App\Jobs;

use Carbon\Carbon;
use App\Models\Campaign;
use App\Mail\CampaignMail;
use Illuminate\Bus\Queueable;
use App\Events\CreatedCampaign;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Config;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\SmtpConfigurationService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class RepushFailedMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function sendMail($subscriber, $campaign): void
    {
        Mail::to($subscriber)
            ->send(new CampaignMail($campaign, $subscriber));

        $campaign->subscribers()->updateExistingPivot(
            $subscriber,
            ['mail_sent_at' => now()]
        );
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // echo 'Event: Campaign Created' . PHP_EOL;
        $campaigns = Campaign::with('subscribers')
            ->whereHas('subscribers', fn ($q) => $q->whereNull('mail_sent_at')
                ->whereMonth('subscribers.created_at', now()->format('m')))
            ->latest()
            ->paginate();

        foreach ($campaigns->items() as $campaign) {
            $campaign->subscribers->each(function ($subscriber) use ($campaign) {
                try {
                    $this->sendMail($subscriber, $campaign);
                } catch (\Exception $e) {
                    (new SmtpConfigurationService())
                        ->setCredentials(
                            config('mail.mailers.backupsmtp.host'),
                            config('mail.mailers.backupsmtp.port'),
                            config('mail.mailers.backupsmtp.username'),
                            config('mail.mailers.backupsmtp.password'),
                            config('mail.mailers.backupsmtp.encrypt')
                        );
                    $this->sendMail($subscriber, $campaign);
                }
            }, 1000);
        }
    }
}
