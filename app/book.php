<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public $fillable =[
        'title',
        'body',
        'content',
        'path'
    ];
}
