<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YesNo extends Model
{
    protected $table = 'yes_nos';
    protected $fillable = ['yes','no'];
}
