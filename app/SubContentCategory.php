<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubContentCategory extends Model
{
    //
    protected $table = 'users';
    
    protected $fillable = [
        'name',
        'alias',
        'category',
    ];
}
