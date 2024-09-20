<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\PersonlInfo;
use Carbon\Carbon;
use App\Language;
use DB;


class LanguageController extends Controller
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
    // public function index()
    // {
    //     //
    //     $tasks = language::all();
    //     return view('CreateCV.languages',compact('tasks',$tasks));
    // }

    public function index()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $languages = DB::table('languages')->where('user_id', $userid)->get();
      $tasks = language::all();
      return view('CreateCV.languages',compact('user','languages', 'tasks'));
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
        'language'=>'required',
        'level'=>'required',

    ]);
      Language::create([
          'user_id' => Auth::user()->id,
          'language' => request('language'),
          'level' => request('level'),
          'created_at'=>carbon::now(),
          'updated_at'=>carbon::now(),
        ]);

        return redirect('/tasks');
    }

  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(language $task)
    {
        return view('CreateCV.editLanguage',compact('task',$task));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, language $task)
    {
        //Validate
        $request->validate([
            'language' => 'required',
            'level' => 'required',
        ]);

        $task->language = $request->language;
        $task->level = $request->level;
        $task->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, language $task)
    {
        $task->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('/tasks');
    }
}
