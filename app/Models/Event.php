<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function workshop(){
        return $this->belongsTo('App\Models\Workshop', 'event_id');        
    }
}
