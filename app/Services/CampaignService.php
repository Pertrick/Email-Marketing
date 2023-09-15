<?php

namespace App\Services;

use App\Models\Campaign;
use App\Models\Subscriber;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CampaignService
{
    public $campaign;

    public function __construct($campaign)
    {
        $this->campaign = $campaign;
        $this->storeCampaignSubscriber();
    }


    public function storeCampaignSubscriber()
    {
        $campaignArray = $this->campaign;

        Log::info("CampaignService -> campaignArray");
        Log::info(json_encode($campaignArray));

        $campaign = $campaignArray['campaign'];

        Log::info("CampaignService -> campaign");
        Log::info(json_encode($campaign));


        DB::transaction(function () use ($campaignArray,$campaign) {
            $campaignModel = Campaign::create([
                "name" => $campaign['title'],
                "reply_to" => $campaign['reply_to'],
                "sender_name" => $campaign['from_name'],
                "sender_email" => $campaign['from_email'],
                "delivery_date" => $campaign['schedule_date'],
                "content" => $campaign['content']
            ]);
        
            $campaignSubscribers = $campaignArray['subscribers'];
        
            foreach ($campaignSubscribers as $subscriberData) {
                $subscriber = Subscriber::create([
                    "name" => $subscriberData['fname'] . " " . $subscriberData['lname'],
                    "email" => $subscriberData['email'],
                    "phone" => $subscriberData['phone'],
                    "country" => $subscriberData['country']
                ]);
        
                $campaignModel->subscribers()->attach($subscriber);
            }
        });

        // $campaignModel =  Campaign::create([
        //     "name" => $campaign['title'],
        //     "reply_to" => $campaign['reply_to'],
        //     "sender_name" => $campaign['from_name'],
        //     "sender_email" => $campaign['from_email'],
        //     "delivery_date" => $campaign['schedule_date'],
        //     "content" => $campaign['content']
        // ]);

        // $campaignSubscribers = $campaignArray['subscribers'];

        // foreach ($campaignSubscribers as $subscriber) {
           
        //     $subscriber =   Subscriber::create([
        //         "name" => $subscriber['fname'] . " " . $subscriber['lname'],
        //         "email" => $subscriber['email'],
        //         "phone" => $subscriber['phone'],
        //         "country" => $subscriber['country']
        //     ]);

        //    $campaignModel->subscribers()->attach($subscriber);
           
        // }
    }

}
