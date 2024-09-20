<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;
use App\PersonlInfo;
use App\Company;
use App\Job;

class companyProfileController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = PersonlInfo::all();
        return view('test', compact('user',$user));
    }

    // public function index()
    // {
    //     //
    //     $tasks = Skill::all();
    //     return view('tasks.index',compact('tasks',$tasks));
    // }





    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    // public function show(Company $user)
    // {
    //   $test = DB::table('jobs as j')
    //              ->join('applications as a', 'j.id', '=', 'a.id')
    //              ->select('j.*', 'a.job_id as job_id')
    //              //->where('user_id', $job_id)
    //              ->get();
    //   return view('profileCo',compact('user',$user, 'test'));
    // }


      public function show($companies)
    {
        $record = DB::table("companies")->where('user_id', $companies)->get();
        return view('companyProfile.test',compact('record'));
    }


}
