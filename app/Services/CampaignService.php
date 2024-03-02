<?php

namespace App\Services;

use App\Models\Campaign;
use App\Models\Subscriber;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CampaignService
{

    public function __construct()
    {
    }


    public function storeCampaignSubscriber($campaignArray)
    {
       
        info($campaignArray);

        Log::info("CampaignService -> campaignArray");
        Log::info(json_encode($campaignArray));

        $campaign = $campaignArray['campaign'];

        Log::info("CampaignService -> campaign");
        Log::info(json_encode($campaign));


        try {
            return  DB::transaction(function () use ($campaignArray,$campaign) {
                $campaignModel = Campaign::create([
                    "name" => $campaign['title'],
                    "reply_to" => $campaign['from_email'],
                    "sender_name" => $campaign['from_name'],
                    "sender_email" => 'test@cheapmailing.com.ng',
                    "delivery_date" => $campaign['schedule_date'],
                    "content" => $campaign['content']
                ]);
            
                $campaignSubscribers = $campaignArray['subscribers'];
                echo json_encode($campaignSubscribers);
            
                foreach ($campaignSubscribers as $subscriberData) {
                    $subscriber = Subscriber::create([
                        "name" => $subscriberData['fname'],
                        "email" => $subscriberData['email'],
                        "phone" => $subscriberData['phone'],
                        "country" => $subscriberData['country']
                    ]);
            
                    $campaignModel->subscribers()->attach($subscriber);
                }
    
                return $campaignModel;
            });
    
        }
        catch (\Exception $e) {
            Log::error('Error creating campaign: ' . $e->getMessage());
            return null;
        }
        
    }

}
