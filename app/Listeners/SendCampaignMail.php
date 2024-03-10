<?php

namespace App\Listeners;

use Carbon\Carbon;
use App\Models\Campaign;
use App\Mail\CampaignMail;
use Illuminate\Support\Str;
use App\Events\CreatedCampaign;
use App\Jobs\SendCampaignMailJob;
use App\Services\CampaignService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Config;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\SmtpConfigurationService;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCampaignMail implements ShouldQueue
{
    public $tries = 3;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CreatedCampaign  $event
     * @return void
     */
    public function handle(CreatedCampaign $event)
    {
        $campaign =  (new campaignService)->storeCampaignSubscriber($event->campaign);

        if (!is_null($campaign) && $campaign->delivery_date <= now()) {
            $today = now()->format('Y-m-d');
            $subscribers = $campaign->subscribers()
                ->with('pivot')
                ->wherePivot('mail_sent_at', null)
                ->wherePivot('created_at', '>=', $today)
                ->wherePivot('created_at', '<', $today . ' 23:59:59')
                ->cursor();


            foreach ($subscribers as $subscriber) {
                SendCampaignMailJob::dispatch($campaign, $subscriber);
            }
        }
    }
}
