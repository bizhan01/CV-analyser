<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
      protected $fillable = ['user_id','language','level'];
}
