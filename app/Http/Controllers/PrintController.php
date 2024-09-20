<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\PersonlInfo;
use App\education;
use App\skill;
use App\language;
use App\Experience;
use App\Reference;
use App\documents;
use DB;
use PDF;



class PrintController extends Controller
{
    public function index()
    {
        if (Auth::check()){
        $userid = Auth::user()->id;
      }
        $user = DB::table('personl_infos')->where('user_id', $userid)->get();
        $education = DB::table('education')->where('user_id', $userid)->get();
        $skills = DB::table('skills')->where('user_id', $userid)->get();
        $languages = DB::table('languages')->where('user_id', $userid)->get();
        $experiences = DB::table('experiences')->where('user_id', $userid)->get();
        $references = DB::table('references')->where('user_id', $userid)->get();
        $documents = DB::table('documents')->where('user_id', $userid)->get();
      {
          return view ('profile.printView',
            compact('user','education','skills','languages','experiences','references','documents'));

      }
  }

    public function print()
    {if (Auth::check()){
      $userid = Auth::user()->id;
    }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $education = DB::table('education')->where('user_id', $userid)->get();
      $skills = DB::table('skills')->where('user_id', $userid)->get();
      $languages = DB::table('languages')->where('user_id', $userid)->get();
      $experiences = DB::table('experiences')->where('user_id', $userid)->get();
      $references = DB::table('references')->where('user_id', $userid)->get();
      $documents = DB::table('documents')->where('user_id', $userid)->get();
      $pdf = PDF::loadView('profile.printView',
        compact('user','education','skills','languages','experiences','references','documents'));
      return $pdf->download('CV.pdf');
    }

    
}
