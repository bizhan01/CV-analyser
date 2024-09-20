<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['user_id','fullName','profession','dob','phone', 'email','address','profileImage'];
}
