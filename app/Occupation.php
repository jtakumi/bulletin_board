<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
use App\Question;

class Occupation extends Model
{
    public function companies()
    {
        return $this->hasOne('App\company');    
    }
    
     public function Question()
    {
        return $this->hasMany('App\Question');
    }
}
