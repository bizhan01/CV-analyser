<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\education;
use App\PersonlInfo;
use Carbon\Carbon;
use DB;


class educationController extends Controller
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
      $education = DB::table('education')->where('user_id', $userid)->get();
      return view('CreateCV.education',compact('user','education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $education = DB::table('education')->where('user_id', $userid)->get();
      return view('CreateCV.education',compact('user','education'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
         {
          $user_id = $request->user_id;
          $degree = $request->degree;
          $fieldOfStudy = $request->fieldOfStudy;
          $school = $request->school;
          $city = $request->city;
          $country = $request->country;
          $end = $request->end;


              for($i = 0; $i < count($user_id); $i++){

               $education = DB::table('education')->where('user_id', $user_id)->get();

                if($education)

              {
                  $this->validate(request(),[
                 'id' => 'unique:students',
                 'degree' => 'required',
                 'fieldOfStudy' =>'required',
                 'school' => 'required',
                 'city' => 'required',
                 'country' => 'required',
                 'end' => 'required',
             ]);

                     education::create([
                      'user_id' => $user_id[$i],
                      'degree' => $degree[$i],
                      'fieldOfStudy' => $fieldOfStudy[$i],
                      'school' => $school[$i],
                      'city' => $city[$i],
                      'country' => $country[$i],
                      'end' => $end[$i],
                      'created_at'=>carbon::now(),
                      'updated_at'=>carbon::now(),
                     ]);
             }else{
                      return redirect()->back()->with('message2', '     OK  ');
               }
             }
             // Student::create($request->all());
             return redirect()->back()->with('message', '        NO K          ');
         }



    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    // public function show(Skill $skill)
    // {
    //     return view('tasks.show',compact('skill',$skill));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(education $education)
    {
        return view('CreateCV.editEducation',compact('education',$education));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, education $education)
    {
        //Validate
        $request->validate([
            'degree' => 'required',
            'school' => 'required',
        ]);

        $education->degree = $request->degree;
        $education->fieldOfStudy = $request->fieldOfStudy;
        $education->school = $request->school;
        $education->city = $request->city;
        $education->country = $request->country;
        $education->end = $request->end;
        $education->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('/education');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, education $education)
    {
        $education->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('/education');
    }
}
