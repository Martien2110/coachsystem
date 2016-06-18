<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions_specification extends Model
{
    //

    protected $fillable = ['category'];
    public $timestamps = false;

    protected $table = 'questions_specifications';

    public function question()
    {
    	return $this->belongsTo('App\Question');
    }
}
