<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Industry extends Model
{
    public function Companies()
    {
        return $this->hasOne('App\Company');
    }
    
}
