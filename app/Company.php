<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Industry;
use App\Occupation;

class Company extends Model
{
    protected $fillable=['name',
                        'address',
                        'industry_id',
                        'occupation_id'];
                        
    public function Industry()
    {
        return $this->belongTo('App\Industry');
    }
    public function Occupation()
    {
        return $this->belongTo('App\Occupation');
    }
}
