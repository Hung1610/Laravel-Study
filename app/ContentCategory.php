<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentCategory extends Model
{
    //
    protected $table = 'content_category';
    public    $route = 'content-category';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'alias',
    ];
}
