<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
      protected $fillable = ['user_id','fullName','relationship','company','position','email','phone'];
}
