<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'post';
    protected $fillable = ['title','conten'];
    protected $visible = ['title','conten'];
    protected $timestamps = true;
}
