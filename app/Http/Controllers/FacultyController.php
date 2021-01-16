<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\Faculty;
use DB;
class FacultyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('role:teacher');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
              $date = Carbon::now();
              $date1= $date->isoFormat('Do MMMM ');
        
              $users = DB::table('users')
              ->join('faculties', 'users.id', '=', 'faculties.user_id')
              ->select('users.name', 'faculties.first_name','faculties.last_name' ,'users.name')
  
              ->first(); 
            $user = Auth::User(); 
            $facultys= Faculty::all();
            return view('faculty', compact('user','date1','facultys'));
       
        }
        
}
