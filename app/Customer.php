<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

    protected $guarded = ['id'];
    public $timestamps = false;

    public function status()
    {
    	return $this->hasMany('App\Status');
    }

    // public function intake()
    // {
    // 	return $this->hasOne('App\Intake');
    // }
}
