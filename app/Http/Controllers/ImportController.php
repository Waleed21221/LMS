<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Imports\DegreeImport;
use App\Imports\CourseImport;
use App\Imports\CampusImport;
use App\Imports\FacultyImport;
use App\Imports\StudentImport;
// use App\Imports\UserImport;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Validators\Failure;
use Response;
use Exception;
use Maatwebsite\Excel\Facades\Excel;


class ImportController extends Controller
{
    public function importExportView()
    {
       return view('import');
    }
     
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
     
     
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function import() 
    // {
    //     Excel::import(new UsersImport,request()->file('file'));
    //     return 'Successfull!';
    // }

    public function degree() 
    {

try{
        Excel::import(new DegreeImport,request()->file('file'));
        return redirect()->route('degree')->with('success','Record Added Successfuly');
    }
    catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
       $failures = $e->failures();
       return back()->withErrors($failures);
    }
    }
    
    

    public function campus() 
    {
        try{
        Excel::import(new CampusImport,request()->file('file'));
        return redirect()->route('campus')->with('success','Record Added Successfuly');
        } catch(\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            return back()->withErrors($failures);
         }  
        }

    public function course() 
    {   
        try{
        Excel::import(new CourseImport,request()->file('file'));
        return redirect()->route('course')->with('success','Record Added Successfuly');
        }catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            return back()->withErrors($failures);
         }
    }

    public function faculty() 
    {   
        try{
        Excel::import(new FacultyImport,request()->file('file'));
        return redirect()->route('teacher')->with('success','Record Added Successfuly');
        }catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            return back()->withErrors($failures);
         }
    }

    public function student() 
    {   
        try{
        Excel::import(new StudentImport,request()->file('file'));
        return redirect()->route('student')->with('success','Record Added Successfuly');
        }catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            return back()->withErrors($failures);
         }
    }

//     public function csv() 
//     {   
//         try{
//         Excel::import(new UserImport,request()->file('file'));
//         return back()->with('success','Record Added Successfuly');
//     }catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
//         $failures = $e->failures();
//         return back()->withErrors($failures);
//     }
//   }

}
