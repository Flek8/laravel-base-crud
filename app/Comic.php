<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['url', 'title', 'type', 'series', 'price', 'description'];
}
