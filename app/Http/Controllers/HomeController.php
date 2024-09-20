<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\PersonlInfo;
use App\education;
use App\skill;
use App\language;
use App\Experience;
use App\Reference;
use App\documents;
use App\Messages;
use App\Company;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
        $user = DB::table('personl_infos')->where('user_id', $userid)->get();
        $personalInfo = DB::table('personl_infos')->where('user_id', $userid)->get();
        $admin = DB::table('admins')->where('user_id', $userid)->get();
        $companies = DB::table('companies')->where('user_id', $userid)->get();
        return view('home',compact('user','personalInfo', 'admin' ,'companies'));
    }



    public function profile()
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
      return view('profile.userProfile',
      compact('user','education','skills','languages','experiences','references','documents'));
    }

    public function show(Profile $profile)
    {
        return view('userProfile.test');
    }

    // admin

    public function admin()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      return view("admin",compact('user'));
    }

    public function slideShow()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();

      return view('CreateCV.slideShow',compact('user'));
    }
    public function PersonalInfo()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      return view('CreateCV.personalInfo',compact('user'));
    }

    public function education()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $education = DB::table('education')->where('user_id', $userid)->get();
      return view('CreateCV.education',compact('user','education'));
    }
    public function skills()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $skills = DB::table('skills')->where('user_id', $userid)->get();
      return view('CreateCV.skills',compact('user','skills'));
    }
    public function languageView()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $languages = DB::table('languages')->where('user_id', $userid)->get();

      return view('CreateCV.languages',compact('user', 'languages'));
    }

    public function experience()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $experiences = DB::table('experiences')->where('user_id', $userid)->get();
      return view('CreateCV.experience',compact('user','experiences'));
    }

    public function documents()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $documents = DB::table('documents')->where('user_id', $userid)->get();
      return view('CreateCV.documents',compact('user','documents'));
    }

    public function reference()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $references = DB::table('references')->where('user_id', $userid)->get();
      return view('CreateCV.reference',compact('user','references'));
    }


}
