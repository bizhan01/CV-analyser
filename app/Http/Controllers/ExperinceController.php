<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\PersonlInfo;
use Carbon\Carbon;
use App\Experience;
use DB;


class ExperinceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $experiences = DB::table('experiences')->where('user_id', $userid)->get();
      return view('CreateCV.experience',compact('user','experiences'));
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
         'jobTitle'=>'required',
         'company'=>'required',
         'city' => 'required',
         'country' => 'required',
         'start' => 'required|date',
         'end' => 'required|date',

     ]);
       Experience::create([
           'user_id' => Auth::user()->id,
           'jobTitle' => request('jobTitle'),
           'company' => request('company'),
           'city' => request('city'),
           'country' => request('country'),
           'start' => request('start'),
           'end' => request('end'),
           'created_at'=>carbon::now(),
           'updated_at'=>carbon::now(),
         ]);

         return redirect('/experience');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Experience $experience)
    {
        return view('CreateCV.editExperience',compact('experience',$experience));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Experience $experience)
     {
         //Validate
         $request->validate([
             'jobTitle' => 'required',
             'company' => 'required',
         ]);

         $experience->jobTitle = $request->jobTitle;
         $experience->company = $request->company;
         $experience->city = $request->city;
         $experience->country = $request->country;
         $experience->start = $request->start;
         $experience->end = $request->end;
         $experience->save();
         $request->session()->flash('message', 'Successfully modified the task!');
         return redirect('/experience');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Experience $experience)
    {
        $experience->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('/experience');
    }
}
