<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use App\User;
use App\Crud;
use App\Programs;
use App\Semester;


class AdminController extends Controller
{

	  public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index()

    {
         $date = Carbon::now();
              $date1= $date->isoFormat('Do MMMM ');

            // $user = Auth::User();
            $users = DB::table('users')
            ->join('personal_info', 'users.id', '=', 'personal_info.user_id')
            ->select('users.name', 'personal_info.designation', 'users.name')

            ->first(); 
            return view('admin', compact('users','date1'));
    }


    public function program()
    {
        $crud = Crud::all()->toArray();
        return view('program', compact('crud'));
    }

     public function create()
    {
        return view('create');

    }

    public function store(Request $request)
    {
             $this->validate($request, [
                'name'    =>  'required',
                'code'     =>  'required',
                'description'     =>  'required'
            ]);
            $crud = new Crud([
                'name' => $request->get('name'),
                'code' => $request->get('code'),
                'description' => $request->get('description')
                ]);


            $crud->save(); 
            return redirect()->route('program')->with('success','Record Added');
    }

         public function semester()
    {
      $crud = DB::table('semester')
            ->join('programs', 'programs.id', '=', 'semester.program_id')
            ->select('programs.name', 'semester.semester')
            // ->where('semester.program_id',5)
            ->get();
        return view('semester', compact('crud'));

    }

    public function createsemester()
    {
        $semester = DB::table('programs')
                        ->select('id','name')
                        // ->groupBy('name')
                        ->orderBy('name','ASC')
                        ->get();
        return view('createsemester', compact('semester'));

    }

    public function semesterstore(Request $request)
    {
             $this->validate($request, [
                 'program_id'     =>  'required',
                 'semester'     =>  'required'
            ]);
            $crud = new Semester([
                'program_id' => $request->get('program_id'),
                'semester' => $request->get('semester')
                ]);


            $crud->save(); 
            return redirect()->route('semester')->with('success','Record Added');
    }

    public function editsemester()
    {
    	
    }


    public function destroysemester()
    {
        
    }

    
   public function course()
    {
      $crud = DB::table('course')
            ->join('semester', 'semester.id', '=', 'course.semester_id')
            ->select('semester.semester', 'course.course')
            ->get();
        return view('course', compact('crud'));

    }

    public function editProfile()
    {       
        $date = Carbon::now();
            $date1= $date->isoFormat('Do MMMM ');
            $users = DB::table('users')
            ->join('personal_info', 'users.id', '=', 'personal_info.user_id')
            ->select('users.name', 'personal_info.designation', 'personal_info.phn_no', 'personal_info.address', 'personal_info.city', 'users.name')
            ->first(); 
            return view('editProfile', compact('users','date1'));
    }
   
}
