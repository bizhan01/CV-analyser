<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['job_id', 'user_id','fullName','email', 'phone'];
}
