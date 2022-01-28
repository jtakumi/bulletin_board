<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Question extends Model
{
    protected $fillable =[
        'industry',
        'occupation',
        'company',
        'title',
        'body',
        'feedback',
        ];
    public function getPaginateByLimit(int $limit_count = 50)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
