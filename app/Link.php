<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    protected $fillable = ['url', 'title', 'icon', 'description','user_id'];
}
