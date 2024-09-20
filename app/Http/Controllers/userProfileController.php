<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;
use App\PersonlInfo;
use App\education;
use App\language;
use App\Experience;
use App\Reference;
use App\documents;
use App\Messages;

class userProfileController extends Controller
{
      public function show(PersonlInfo $user)
    {
       $records = DB::table('personl_infos')->where('user_id', $user)->get();
       $education = DB::table('education')->where('user_id', $user->user_id)->get();
       $skills = DB::table('skills')->where('user_id', $user->user_id)->get();
       $languages = DB::table('languages')->where('user_id', $user->user_id)->get();
       $experiences = DB::table('experiences')->where('user_id', $user->user_id)->get();
       $references = DB::table('references')->where('user_id', $user->user_id)->get();
       $documents = DB::table('documents')->where('user_id', $user->user_id)->get();
        return view('userProfile.profileView',compact('user','records', 'education','skills','languages','experiences','references','documents' ));
    }

}
