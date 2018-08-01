<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function __construct(Comment $model)
    {
        $this->model    = $model;
    }
    
    protected $fillable = [
        'content',
        'user_id',
        'content_id',
    ];
}
