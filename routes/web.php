<?php
Route::get('/', function () {
  $user_count = DB::table('personl_infos')->count('id');
  $jobs_count = DB::table('jobs')->count('id');
  $application_number = DB::table('applications')->count('id');
  $companies_count = DB::table('companies')->count('id');
   //$job = DB::table('jobs')->latest()->get();
   $test = DB::table('companies as c')
                ->leftJoin('jobs as j', 'c.user_id', '=', 'j.user_id')
                ->select('c.*', 'j.*')
              //  ->orderBy('created_at', 'desc')
                ->get();
    return view('welcome', compact('user_count','jobs_count','application_number','companies_count',  'test'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post','PagesController@post');
Route::get('/xxx', 'HomeController@xxx');
Route::post('/post','PostsController@store');
Route::get('/jobListing', 'PagesController@joblist');
Route::get('/apply','PagesController@apply');
Route::get('/services','PagesController@services');
Route::get('/about', 'PagesController@about');
Route::get('/contactUs', 'PagesController@contactUs');
Route::post('/messages', 'MessagesController@store');
Route::get('/userProfile', 'HomeController@profile');
Route::get('/documents', 'HomeController@documents');
// admin Route
Route::get('/admin', 'HomeController@admin')->middleware('admin');
//upload file routes
Route::post('/uploadFile','uploadFileController@upload');
Route::post('/uploadDocument','DocumentController@store');
//printCV
Route::get('/printView', 'PrintController@index');
Route::get('/download/pdf', 'PrintController@print');
Route::get('/printView/{id}', 'PrintMeController@index');
Route::get('/download/pdfMe/{id}/', 'PrintMeController@print');
Route::get('/download/pdfCV/{id}/', 'PrintCVController@print');
// subsribe
Route::post('/subsribe', 'SubscriptionController@store');
Route::resource('tasks', 'LanguageController');
Route::resource('skills', 'SkillController');
Route::resource('reference', 'ReferenceController');
Route::resource('experience', 'ExperinceController');
Route::resource('personlInfo', 'PersonalInfoController');
Route::resource('education', 'EducationController');
Route::resource('company', 'CompanyController');
Route::resource('admin', 'AdminController');
Route::get('/create', 'AdminController@create');
Route::get('/profile', 'CompanyController@profile');
Route::resource('job', 'JobController');
Route::resource('application', 'ApplicationController');
Route::get('/applicationConfirm', 'ApplicationController@applicationConfirm');
Route::get('/applications/{id}/','JobController@applicationList');

//Search Routes
Route::post('/searchCondidate', 'SearchController@searchCondidate');
Route::post('/searchJob', 'SearchController@searchJob');
Route::resource('user', 'userProfileController');
Route::resource('companies', 'companyProfileController');
