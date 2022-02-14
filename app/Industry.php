<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
use App\Question;

class Industry extends Model
{
    public function Companies()
    {
        return $this->hasOne('App\Company');
    }
     public function Question()
    {
        return $this->hasMany('App\Question');
    }
}
