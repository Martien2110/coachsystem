<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //

    protected $guarded = ['id'];
    public $timestamps = false;

    public function status()
    {
    	return $this->hasMany('App\Status');
    }
}
