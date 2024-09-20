<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\PersonlInfo;
use Carbon\Carbon;
use App\Reference;
use DB;


class ReferenceController extends Controller
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
      $references = DB::table('references')->where('user_id', $userid)->get();
      return view('CreateCV.reference',compact('user','references'));
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
         'relationship'=>'required',
         'company'=>'required',
         'position'=>'required',
         'email'=>'required',
         'phone'=>'required|min: 10|max:14',

     ]);
       Reference::create([
           'user_id' => Auth::user()->id,
           'fullName' => request('fullName'),
           'relationship' => request('relationship'),
           'company' => request('company'),
           'position' => request('position'),
           'email' => request('email'),
           'phone' => request('phone'),
           'created_at'=>carbon::now(),
           'updated_at'=>carbon::now(),
         ]);

         return redirect('/reference');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Reference $reference)
    {
        return view('CreateCV.editReference',compact('reference',$reference));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Reference $reference)
     {
         //Validate
         $request->validate([
             'fullName' => 'required',
             'relationship' => 'required',
         ]);

         $reference->fullName = $request->fullName;
         $reference->relationship = $request->relationship;
         $reference->company = $request->company;
         $reference->position = $request->position;
         $reference->email = $request->email;
         $reference->phone = $request->phone;
         $reference->save();
         $request->session()->flash('message', 'Successfully modified the task!');
         return redirect('/reference');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Reference $reference)
    {
        $reference->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('/reference');
    }
}
