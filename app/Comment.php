<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'Comment';
    
    protected $fillable = [
        'content',
        'user_id',
        'content_id',
    ];
}
