<?php

namespace App;

use App\Company;
use App\Occupation;
use App\Industry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Question extends Model
{
    protected $fillable =[
        'questionText',
        'answer',
        'feedback',
        'user_id',
        'company_id',
        ];
    public function getPaginateByLimit(int $limit_count = 20)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
        //return $this::with('category')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    
    public function occupation()
    {
        return $this->belongsTo('App\Occupation');
    }
    
    public function industry()
    {
        return $this->belongsTo('App\Industry');
    }
}
