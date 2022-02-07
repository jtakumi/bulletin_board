<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Question extends Model
{
    protected $fillable =[
        'title',
        'body',
        'feedback',
        'company_id',
        ];
    public function getPaginateByLimit(int $limit_count = 50)
    {
        //return $this->orderBy('updated_at','DESC')->paginate($limit_count);
        return $this::with('category')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
