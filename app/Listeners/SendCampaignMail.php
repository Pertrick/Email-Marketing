<?php

namespace App\Listeners;

use Mail;
use Carbon\Carbon;
use App\Mail\CampaignMail;
use App\Events\CreatedCampaign;
use App\Services\CampaignService;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCampaignMail
{
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
        $sendCampaign = (new campaignService($event->campaign))->send();

        extract($sendCampaign);
        $date_time= date('Y-m-d H:i:s', strtotime("$campaign->delivery_date, $campaign->delivery_time"));
        $schedule_date =  Carbon::parse($date_time);
        dd($schedule_date);

        foreach ($campaignSubscribers as $campaignSubscriber) {
            Mail::to($campaignSubscriber)
            ->later($schedule_date,
                new CampaignMail($campaign,$campaignSubscriber)
            );
        }
    }
}
