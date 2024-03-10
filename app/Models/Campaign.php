<?php

namespace App\Models;

use App\Models\EmailList;
use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaign extends Model
{
    use HasFactory;

    const READY =0, SENDING=1, DONE = 2;

    protected $fillable = [
        "name",
        "reply_to",
        "sender_name",
        "sender_email",
        "delivery_date",
        "content"
    ];


    public function emailLists(){
        return $this->belongsToMany(EmailList::class);
    }

    public function subscribers(){
        return $this->belongsToMany(Subscriber::class)->withPivot(['tracking_token','mail_sent_at']);
    }
}
