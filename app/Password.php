<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    //
    protected $fillable = ['user_id', 'content'];
}
