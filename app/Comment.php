<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $guarded = ['id'];

    public function intake()
    {
    	return $this->belongsTo('App\intake');
    }

    // public function appointment()
    // {
    // 	return $this->hasOne('App\Appointment');
    // }
}
