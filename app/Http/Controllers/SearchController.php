<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\PersonlInfo;
use App\Job;
use DB;

class SearchController extends Controller
{
    public function searchCondidate()
    {
      $q = Input::get ( 'q' );
    	if($q != ""){
    		$user = PersonlInfo::where ( 'profession', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
    		if (count ( $user ) > 0)
    			return view ( 'searchResult' )->withDetails ( $user )->withQuery ( $q );
    		else
    			return view ( 'searchResult' )->withMessage ( 'No Details found. Try to search again !' );
    	}
    	return view ( 'searchResult' )->withMessage ( 'No Details found. Try to search again !' );

    }

    public function searchJob()
    {
      $q = Input::get ( 'q' );
    	if($q != ""){
        // $test = DB::table('companies as c')
        //              ->leftJoin('jobs as j', 'c.user_id', '=', 'j.user_id')
        //              ->select('c.*', 'j.*')
        //            //  ->orderBy('created_at', 'desc')
        //              ->get();
    		$users = Job::where ( 'jobTitle', 'LIKE', '%' . $q . '%' )->orWhere ( 'gender', 'LIKE', '%' . $q . '%' )->get ();
    		if (count ( $users ) > 0)
    			return view ( 'searchResult' )->withDetailss ( $users )->withQuery ( $q );
    		else
    			return view ( 'searchResult' )->withMessage ( 'No Details found. Try to search again !' );
    	}
    	return view ( 'searchResult' )->withMessage ( 'No Details found. Try to search again !' );
    }
}
