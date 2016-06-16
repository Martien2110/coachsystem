<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intake extends Model
{
    //
    protected $guarded = ['id'];
    public $timestamps = false;

    public function status()
    {
    	return $this->belongsTo('App\Customer');
    }
}
