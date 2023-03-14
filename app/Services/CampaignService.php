<?php

namespace App\Services;

use App\Models\Campaign;
use App\Models\Subscriber;
use Illuminate\Support\Facades\DB;

class CampaignService
{
    public $campaign;

    public function __construct($campaign)
    {
        $this->campaign = $campaign;
    }


    public function storeCampaignSubscriber(){
        $campaignArray = $this->campaign;

        $campaign = $campaignArray['campaign'];

       Campaign::create([
            "name" => $campaign->title,
            "reply_to" => $campaign->reply_to,
            "sender_name" => $campaign->from_name,
            "sender_email" => $campaign->from_email,
            "delivery_date" => $campaign->schedule_date
        ]);

        $campaignSubscribers = $campaignArray['subscribers'];

        foreach($campaignSubscribers as $subscriber){
          $subscriber =   Subscriber::create([
                "name" => $subscriber->fname ." " .$subscriber->lname,
                "email" => $subscriber->email,
                "phone" => $subscriber->phone,
                "country" => $subscriber->country
            ]);

            $campaign->subscribers()->attach($subscriber);
        }
    
    }

    public function send()
    {
        
     $campaigned =  DB::transaction(function (): array {
            $this->storeCampaignSubscriber();
            $campaign= $this->campaign['campaign'];
            $subscribers = $campaign['subscribers'];

            return compact('subscribers','campaign');
        });
       
        return $campaigned;

    }
}
