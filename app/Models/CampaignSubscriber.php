<?php

namespace App\Models;

use App\Models\Campaign;
use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CampaignSubscriber extends Pivot
{
    use HasFactory;
    protected $table = 'campaign_subscriber';

    public function campaigns()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function subscribers(){
        return $this->belongsTo(Subscriber::class);
    }
}
