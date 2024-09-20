<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = ['user_id','company', 'category','email', 'phone', 'website', 'location', 'profileImage'];
}
