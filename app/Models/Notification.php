<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'type', 'content', 'status', 'reservation_id',
    ];

    public function reservation(){
        return $this->belongsTo('App\Models\Reservation');
    }
}
