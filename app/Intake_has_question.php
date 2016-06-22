<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Intake_has_question extends Model
{
    //
    protected $fillable = ['questions_id', 'intakes_id', 'answer'];
    public $timestamps = false;
    public $table = 'intakes_has_questions';

    public function intake()
    {
    	return $this->belongsTo('App\Intake');
    }

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
