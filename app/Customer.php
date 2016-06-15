<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    //
    protected $guarded = ['id', 'deleted_at'];

    public function status()
    {
    	return $this->hasMany('App\Status');
    }

    // public function intake()
    // {
    // 	return $this->hasOne('App\Intake');
    // }
}
