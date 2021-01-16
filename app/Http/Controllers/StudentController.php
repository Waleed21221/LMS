<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Degree;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderBy('created_at' , 'desc')->paginate(3);
        $degrees = Degree::all();
        return view('student.create', compact('students','degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $student = new Student;
        $student->degree_id = $request->input('degree_id');
        $student->user_id = $request->input('user_id');
        $student->degree_code = $request->input('degree_code');
        $student->student_id = $request->input('student_id');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->contact_number = $request->input('contact_number');
        $faculty->contact_number = $request->input('contact_number');
        
        $rule  =  array(
            'degree_id'     =>  'nullable',
            'user_id'     =>  'nullable',
            'degree_code'     =>  'required|unique:students',
            'student_id'     =>  'required|unique:students',
            'first_name'     =>  'required',
            'last_name'    =>  'required',
            'contact_number'    =>  'required',
        ) ;
    $validator = Validator::make($request->all(), [
        'degree_id'     =>  'nullable',
        'user_id'     =>  'nullable',
        'degree_code'     =>  'required|unique:students',
        'student_id'     =>  'required|unique:students',
        'first_name'     =>  'required',
        'last_name'    =>  'required',
        'contact_number'    =>  'required',     ]);
        if($validator->fails()) {
            return back()->withErrors($validator);
        }
        else{
            $student->save(); 
            return redirect()->route('student')->with('success','Record Added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $student = Student::find($id);
        return view('student.create', compact('student',$student));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $degrees = Degree::all();
        return view('student.edit', compact('student','degrees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
               
            'degree_code' => 'nullable',
            'student_id' => 'nullable',
            'first_name'     =>  'nullable',
            'last_name'    =>  'nullable',
            'email'     =>  'nullable',
            'contact_number'    =>  'nullable',
            'address'     =>  'nullable',
        ]);
        
        $student = Student::find($id);

        $student->degree_id = $request->input('degree_code');
        $student->student_id = $request->input('student_id');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->email = $request->input('email');
        $student->contact_number = $request->input('contact_number');
        $student->address = $request->input('address');

        $student->save(); 
        return redirect()->route('student')->with('success','Record Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        $student->delete();
        return redirect()->route('student')->with('success','Record Deleted');

    }
}