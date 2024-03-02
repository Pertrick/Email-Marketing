<?php

namespace App\Jobs;

use App\Models\Campaign;
use App\Mail\CampaignMail;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\SmtpConfigurationService;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendCampaignMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;

    protected $campaign;
    protected $subscriber;
    public function __construct(Campaign $campaign, Subscriber $subscriber)
    {
        $this->campaign = $campaign;
        $this->subscriber = $subscriber;
    }

    private function sendMail($subscriber, $campaign): void
    {
        Mail::to($subscriber)
            ->send(new CampaignMail($campaign, $subscriber));

            try{
                $campaign->subscribers()->updateExistingPivot($subscriber,['mail_sent_at' => now()], false);
            }catch(Exception $ex){
                Log::error("error message : " . $ex->getMessage());
            }
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $this->sendMail($this->subscriber, $this->campaign);
        } catch (\Exception $e) {

            (new SmtpConfigurationService())
                ->setCredentials(
                    config('mail.mailers.backupsmtp.host'),
                    config('mail.mailers.backupsmtp.port'),
                    config('mail.mailers.backupsmtp.username'),
                    config('mail.mailers.backupsmtp.password'),
                    config('mail.mailers.backupsmtp.encrypt')
                );

            $this->sendMail($this->subscriber, $this->campaign);
        }
    }
}
