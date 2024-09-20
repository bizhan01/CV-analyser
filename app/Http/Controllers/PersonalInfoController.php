<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\PersonlInfo;
use App\User;
use DB;

class PersonalInfoController extends Controller
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

      return view('CreateCV.PersonalInfo',compact('user'));
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
      return view('CreateCV.skills',compact('user'));
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
            'profession'=>'required',
            'dob'=>'required',
            'phone'=>'required|min: 10|max:14',
            'email'=>'required',
            'address'=>'required',
            'select_file' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('select_file')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages"), $new_name);
        }
        else {
          $new_name = 'about.png';
        }
          PersonlInfo::create([
              'user_id' => Auth::user()->id,
              'fullName' => request('fullName'),
              'profession' => request('profession'),
              'dob' => request('dob'),
              'phone' => request('phone'),
              'email' => request('email'),
              'address' => request('address'),
              'profileImage' => $new_name,
              'created_at'=>carbon::now(),
              'updated_at'=>carbon::now(),

            ]);
            return redirect('/personlInfo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('test');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonlInfo $personlInfo)
    {
        return view('CreateCV.editPersonalInfo',compact('personlInfo',$personlInfo));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonlInfo $personlInfo)
    {
        //Validate
        $request->validate([
            'fullName' => 'required',
            'profession' => 'required',
        ]);

        $personlInfo->fullName = $request->fullName;
        $personlInfo->profession = $request->profession;
        $personlInfo->dob = $request->dob;
        $personlInfo->phone = $request->phone;
        $personlInfo->email = $request->email;
        $personlInfo->address = $request->address;
        $personlInfo->profileImage = $request->profileImage;
        $personlInfo->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('/personlInfo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PersonlInfo $personlInfo)
    {
        $personlInfo->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('/personlInfo');
    }
}
