<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $table = 'content';
    public $route = 'content';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'content',
        'is_trend',
        'content_date',
        'img',
        'alias',
        'views',
        'user_id',
        'sub_category_id',
    ];
}
