<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\PersonlInfo;
use App\Skill;
use DB;


class SkillController extends Controller
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
      $skills = DB::table('skills')->where('user_id', $userid)->get();
      return view('CreateCV.skills',compact('user','skills'));
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
      $skills = DB::table('skills')->where('user_id', $userid)->get();
      return view('CreateCV.skills',compact('user','skills'));
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
          'skill'=>'required',
          'percentage'=>'required|integer|min:40',

      ]);
        Skill::create([
            'user_id' => Auth::user()->id,
            'skill' => request('skill'),
            'percentage' => request('percentage'),
            'created_at'=>carbon::now(),
            'updated_at'=>carbon::now(),
          ]);

          return redirect('/skills');
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
    public function edit(Skill $skill)
    {
        return view('CreateCV.editSkill',compact('skill',$skill));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        //Validate
        $request->validate([
            'skill' => 'required',
            'percentage' => 'required',
        ]);

        $skill->skill = $request->skill;
        $skill->percentage = $request->percentage;
        $skill->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('/skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Skill $skill)
    {
        $skill->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('/skills');
    }
}
