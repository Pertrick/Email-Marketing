<?php

namespace App\Listeners;

use Mail;
use Carbon\Carbon;
use App\Models\Campaign;
use App\Mail\CampaignMail;
use Illuminate\Support\Str;
use App\Events\CreatedCampaign;
use App\Services\CampaignService;
use App\Services\SmtpConfigurationService;
use Illuminate\Support\Facades\Config;
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

    
    public function sendMail($subscriber, $campaign):void{
        Mail::to($subscriber)
        ->send(new CampaignMail($campaign, $subscriber));

        $campaign->subscribers()->updateExistingPivot(
            $subscriber,
            ['mail_sent_at' => now()]
        );
    } 

    /**
     * Handle the event.
     *
     * @param  \App\Events\CreatedCampaign  $event
     * @return void
     */
    public function handle(CreatedCampaign $event)
    {
        // $sendCampaign = (new campaignService($event->campaign))->send();

        // extract($sendCampaign);
        // $date_time= date('Y-m-d H:i:s', strtotime("$campaign->delivery_date, $campaign->delivery_time"));
        // $schedule_date =  Carbon::parse($date_time);
        // // dd($schedule_date);

        // foreach ($campaignSubscribers as $campaignSubscriber) {
        //     Mail::to($campaignSubscriber)
        //     ->later($schedule_date,
        //         new CampaignMail($campaign,$campaignSubscriber)
        //     );
        // }

        $sendCampaign = (new campaignService($event->campaign));

        $campaigns = Campaign::with([
            'subscribers' =>
            fn ($query) => $query->wherePivot('mail_sent_at', Null)
        ])
            ->where('delivery_date', '<=', now())->get();

        // info($campaigns);

        foreach ($campaigns as $campaign) {
            foreach ($campaign->subscribers as $subscriber) {
                try{
                    $this->sendMail($subscriber, $campaign);
                }catch(\Exception $e){

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

            }
        }
    }

}
