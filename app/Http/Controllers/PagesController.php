<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonlInfo;
use App\Job;
use App\company;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function post()
    {
      return view('jobs.postJob');
    }

    public function joblist()
    {
     $job = Job::latest()->get();
     $company = Company::latest()->get();
     $jobs_count = DB::table('jobs')->count('id');
     $test = DB::table('companies as c')
                  ->leftJoin('jobs as j', 'c.user_id', '=', 'j.user_id')
                  ->select('c.*', 'j.*')
                //  ->orderBy('created_at', 'desc')
                  ->get();
      return view ('jobs.jobListing', compact('job','company', 'jobs_count', 'test'));
    }

    public function services()
    {

         return view('services');
    }

    public function about()
    {
      $user_count = DB::table('personl_infos')->count('id');
      $jobs_count = DB::table('jobs')->count('id');
      $application_number = DB::table('applications')->count('id');
      $companies_count = DB::table('companies')->count('id');
      $job = DB::table('jobs')->latest()->get();
      return view('about', compact('user_count','jobs_count','application_number','companies_count', 'job'));
    }

    public function contactUs()
    {

      return view('contactUs');
    }



}
