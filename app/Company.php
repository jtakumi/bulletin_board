<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Industry;
use App\Occupation;
use App\Question;

class Company extends Model
{
    protected $fillable=['name',
                        'address',
                        'industry_id',
                        'occupation_id'];
                        
     public function getPaginateByLimit(int $limit_count = 20)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
        //return $this::with('category')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    public function Industry()
    {
        return $this->belongTo('App\Industry');
    }
    public function Occupation()
    {
        return $this->belongTo('App\Occupation');
    }
    public function Question()
    {
        return $this->hasMany('App\Question');
    }
}
