<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use DB;
use carbon\carbon;

class MessagesController extends Controller
{
    public function store()
    {
      $this->validate(request(),[
      'fName'=>'required',
      'lName'=>'required',
      'email'=>'required',
      'subject'=>'required',
      ]);

      Messages::create([
        'fName' => request('fName'),
        'lName'=> request('lName'),
        'email'=>request('email'),
        'subject'=>request('subject'),
        'body'=>request('body'),
        'created_at'=>carbon::now(),
        'updated_at'=>carbon::now(),

      ]);
        return redirect('/contactUs');
    }
}
