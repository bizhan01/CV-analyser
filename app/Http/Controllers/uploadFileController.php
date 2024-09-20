<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photos;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class uploadFileController extends Controller
{
    function upload(Request $request)
    {
      $this->validate($request, [
        'select_file' => 'required|image|mimes:jpeg,jpeg,png,JPG,jpg,gif|max:1999'
      ]);
          $image = $request->file('select_file');
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages"), $new_name);


      photos::create([
          'user_id' => Auth::user()->id,
          'title' => request('title'),
          'profileImage' => $new_name,
          'created_at'=>carbon::now(),
          'updated_at'=>carbon::now(),
        ]);
        return redirect('/uploadFile');
    }
}
