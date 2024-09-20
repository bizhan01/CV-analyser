<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\company;
use App\Application;
use DB;
use App\Job;

class JobController extends Controller
{

      public function __construct()
      {
          $this->middleware('auth');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $job = DB::table('jobs')->where('user_id', $userid)->get();
      $application = DB::table('jobs')->where('user_id', $userid)->get();
      return view('companyPanel.jobs',compact('user','job','application'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //   if (Auth::check()){
    //     $userid = Auth::user()->id;
    //   }
    //   $user = DB::table('personl_infos')->where('user_id', $userid)->get();
    //   $job = DB::table('jobs')->where('user_id', $userid)->get();
    //   return view('companyPanel.analyzeCVs',compact('user','job'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(request(),[
          'jobTitle'=>'required',


      ]);
        Job::create([
            'user_id' => Auth::user()->id,
            'jobTitle' => request('jobTitle'),
            'education' => request('education'),
            'gender' => request('gender'),
            'category' => request('category'),
            'experience' => request('experience'),
            'vacancy' => request('vacancy'),
            'salary' => request('salary'),
            'dateline' => request('dateline'),
            'created_at'=>carbon::now(),
            'updated_at'=>carbon::now(),
          ]);

          return redirect('/company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $users = DB::table('personl_infos')->where('user_id', $userid)->get();

      $companies = DB::table('companies')->where('user_id', $job->user_id)->get();

        return view('jobs.singleJob',compact('job',$job, 'users', 'companies', ));
    }

    public function applicationList($id)
    {
      $application = DB::table('applications')->where('job_id', $id)->get();
        return view('companyPanel.applicationList',compact('application', $application, ));
    }




    // public function xxx(Job $job)
    // {
    //   $application = Application::latest()->get();
    //     return view('companyPanel.applicationList',compact('job',$job, 'application'));
    // }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('companyPanel.editJob',compact('job',$job));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //Validate
        $request->validate([
            'jobTitle' => 'required',
            'education' => 'required',
        ]);

        $job->jobTitle = $request->jobTitle;
        $job->education = $request->education;
        $job->gender = $request->gender;
        $job->category = $request->category;
        $job->experience = $request->experience;
        $job->vacancy = $request->vacancy;
        $job->salary = $request->salary;
        $job->dateline = $request->dateline;
        $job->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('/company');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Job $job)
    {
        $job->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('/company');
    }
}
