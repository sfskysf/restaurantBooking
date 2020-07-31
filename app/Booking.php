<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{


    protected $guarded = [];

    public function table()
    {
        return $this->belongsTo('App\Table');
    }
}
