<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    //
    protected $guarded = ['id'];
    public $timestamps = false;
    
    
}
