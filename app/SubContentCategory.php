<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubContentCategory extends Model
{
    //
    protected $table = 'user';
    
    protected $fillable = [
        'name',
        'alias',
        'category',
    ];
}
