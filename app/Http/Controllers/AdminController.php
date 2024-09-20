<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\users;
use App\PersonlInfo;
use App\Messages;
use App\company;
use Carbon\Carbon;
use App\Admin;



class AdminController extends Controller
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
          $messages = Messages::latest()->get();
          $admin = Admin::latest()->get();
          $personlInfo = personlInfo::latest()->get();
          $companies = company::latest()->get();
        }
        $user = DB::table('admins')->where('user_id', $userid)->get();
        return view('adminHome',
        compact('user','messages', 'admin', 'personlInfo', 'companies'));
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
      $admin = DB::table('admins')->where('user_id', $userid)->get();
      return view('adminPanel.adminProfile',compact('admin'));
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
            'select_file' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'

        ]);
        if($image = $request->file('select_file')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages"), $new_name);
        }
        else {
          $new_name = 'about.png';
        }
          Admin::create([
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
            return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('adminPanel.editPersonalInfo',compact('admin',$admin));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //Validate
        $request->validate([
            'fullName' => 'required',
            'profession' => 'required',
        ]);

        $admin->fullName = $request->fullName;
        $admin->profession = $request->profession;
        $admin->dob = $request->dob;
        $admin->phone = $request->phone;
        $admin->email = $request->email;
        $admin->address = $request->address;
        $admin->profileImage = $request->profileImage;
        $admin->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Admin $admin)
    {
        $admin->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('/create');
    }
}
