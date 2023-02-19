<?php

namespace App\Models;

use App\Models\Subscriber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmailList extends Model
{
    use HasFactory;

    public function subscribers(){
        return $this->belongsToMany(Subscriber::class);
    }
}
