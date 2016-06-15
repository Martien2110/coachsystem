<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //

    protected $guarded = ['id'];
    public $timestamps = false;

    public function message()
    {
    	return $this->belongsTo('App\Message');
    }

}
