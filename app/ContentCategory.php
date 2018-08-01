<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentCategory extends Model
{
    //
    protected $table = 'ContentCategory';
    
    protected $fillable = [
        'name',
        'alias',
    ];
}
