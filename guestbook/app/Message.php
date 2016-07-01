<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Message extends Model
{
    protected $fillable = ['name', 'email', 'message'];
}
