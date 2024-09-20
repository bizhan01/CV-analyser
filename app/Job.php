<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['user_id','jobTitle', 'education', 'gender','category', 'experience','vacancy', 'salary', 'dateline'];
}
