<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $table = 'Content';
    public $route = 'content';
    
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
