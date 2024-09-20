<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\PersonlInfo;
use App\Application;
use Carbon\Carbon;
use App\Experience;
use DB;


class ApplicationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    //     $tasks = ::all();
    //     return view('tasks.index',compact('tasks',$tasks));
    // }

    public function index()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $company = DB::table('companies')->where('user_id', $userid)->get();
      $job = DB::table('jobs')->where('user_id', $userid)->get();
      return view('companyPanel.companyHome',compact('user','company','job'));
    }


    public function applicationConfirm()
    {
      return view('jobs.applicationConfirm');
    }

    public function show(Application $application)
    {
        return view('jobs.singleJob',compact('application',$application));
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(request(),[
            'fullName'=>'required',
            'email'=>'required',

        ]);

          Application::create([
              'user_id' =>request('user_id'),
              'job_id' => request('jobID'),
              'fullName' => request('fullName'),
              'email' => request('email'),
              'phone' => request('phone'),
              'created_at'=>carbon::now(),
              'updated_at'=>carbon::now(),

            ]);
            return redirect('/applicationConfirm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    // public function show(Skill $task)
    // {
    //     return view('tasks.show',compact('task',$task));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companyPanel.editCompanyProfile',compact('company',$company));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Company $company)
     {
         //Validate
         $request->validate([
             'company' => 'required',
             'category' => 'required',
         ]);

         $company->company = $request->company;
         $company->category = $request->category;
         $company->email = $request->email;
         $company->phone = $request->phone;
         $company->website = $request->website;
         $company->location = $request->location;
         $company->save();
         $request->session()->flash('message', 'Successfully modified the task!');
         return redirect('/profile');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Company $company)
    {
        $company->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('/profile');
    }
}
