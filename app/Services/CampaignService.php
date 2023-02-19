<?php

namespace App\Services;

class CampaignService
{
    public $campaign;

    public function __construct($campaign)
    {
        $this->campaign = $campaign;
    }
    public function send()
    {
        $campaign = $this->campaign;
        $campaignSubscribers = [];
        foreach ($campaign->emailLists as $emailList){
            foreach ($emailList->subscribers as $subscriber) {
                array_push($campaignSubscribers, $subscriber);
            }
        }
        return compact('campaign','campaignSubscribers');
    }
}
