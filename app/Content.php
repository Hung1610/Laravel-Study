<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    public function __construct(Content $model)
    {
        $this->model    = $model;
    }
    
    protected $fillable = [
        'title',
        'content',
        'is_trend',
        'content_date',
        'img',
        'alias',
        'views',
        'user_id',
        'sub_category',
    ];
}
