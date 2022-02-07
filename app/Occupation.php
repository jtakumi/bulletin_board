<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Occupation extends Model
{
    public function companies()
    {
        return $this->hasOne('App\company');    
    }
}
