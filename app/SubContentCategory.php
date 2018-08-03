<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubContentCategory extends Model
{
    //
    protected $table = 'sub_content_category';
    public $route = 'sub-content-category';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'alias',
        'category',
    ];
}
