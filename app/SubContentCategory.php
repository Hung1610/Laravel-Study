<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubContentCategory extends Model
{
    //
    public function __construct(ContentCategory $model)
    {
        $this->model    = $model;
    }
    
    protected $fillable = [
        'name',
        'alias',
        'category',
    ];
}
