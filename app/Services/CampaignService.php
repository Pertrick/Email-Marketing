<?php

namespace App\Services;

use App\Models\Campaign;
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
        $campaignSubscribers = $campaignArray['subscribers'];
        $campaign->subscribers()->attach($campaignSubscribers);


    }

    public function send()
    {
        
     $campaigned =    DB::transaction(function (): array {
            $this->storeCampaignSubscriber();
            $campaign= $this->campaign['campaign'];
            $subscribers = $campaign['subscribers'];

            return compact('subscribers','campaign');
        });
       
        return $campaigned;

    }
}
