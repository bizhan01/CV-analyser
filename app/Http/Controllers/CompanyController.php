<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\PersonlInfo;
use App\company;
use Carbon\Carbon;
use App\Experience;
use DB;


class CompanyController extends Controller
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
      $application_number = DB::table('applications')->count('job_id');
      return view('companyPanel.companyHome',compact('user','company', 'application_number', 'job'));
    }

    public function profile()
    {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }
      $user = DB::table('personl_infos')->where('user_id', $userid)->get();
      $company = DB::table('companies')->where('user_id', $userid)->get();
      return view('companyPanel.companyProfile',compact('user','company'));
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
    //   $skills = DB::table('skills')->where('user_id', $userid)->get();
    //   return view('CreateCV.reference',compact('user','skills'));
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
            'company'=>'required',
            'category'=>'required',
            'select_file' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'

        ]);
        if($image = $request->file('select_file')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages"), $new_name);
        }
        else {
          $new_name = 'about.png';
        }
          company::create([
              'user_id' => Auth::user()->id,
              'company' => request('company'),
              'category' => request('category'),
              'email' => request('email'),
              'phone' => request('phone'),
              'website' => request('website'),
              'location' => request('location'),
              'profileImage' => $new_name,
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
         return redirect('/company');
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
        return redirect('/company');
    }
}
