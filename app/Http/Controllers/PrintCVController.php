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



class PrintCVController extends Controller
{
    public function index($id)
    {
      //   if (Auth::check()){
      //   $userid = Auth::user()->id;
      // }
        $user = DB::table('personl_infos')->where('user_id', $id)->get();
        $education = DB::table('education')->where('user_id', $id)->get();
        $skills = DB::table('skills')->where('user_id', $id)->get();
        $languages = DB::table('languages')->where('user_id', $id)->get();
        $experiences = DB::table('experiences')->where('user_id', $id)->get();
        $references = DB::table('references')->where('user_id', $id)->get();
        $documents = DB::table('documents')->where('user_id', $id)->get();
      {
          return view ('profile.printView',
            compact('user','education','skills','languages','experiences','references','documents'));

      }
  }

    public function print($id)
    {
    //   if (Auth::check()){
    //   $userid = Auth::user()->id;
    // }
      $user = DB::table('personl_infos')->where('user_id', $id)->get();
      $education = DB::table('education')->where('user_id', $id)->get();
      $skills = DB::table('skills')->where('user_id', $id)->get();
      $languages = DB::table('languages')->where('user_id', $id)->get();
      $experiences = DB::table('experiences')->where('user_id', $id)->get();
      $references = DB::table('references')->where('user_id', $id)->get();
      $documents = DB::table('documents')->where('user_id', $id)->get();
      $pdf = PDF::loadView('profile.printView',
        compact('user','education','skills','languages','experiences','references','documents'));
      return $pdf->download('CV.pdf');
    }

}
