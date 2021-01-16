<?php

namespace App\Http\Controllers;
use App\Course;
use App\Degree;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class CourseController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('created_at' , 'desc')->paginate(3);
        $degrees = Degree::all();
        return view('course.create', compact('courses', 'degrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $course = new course;
            $course->degree_id = $request->input('degree_id');
            $course->degree_code = $request->input('degree_code');
            $course->course_name = $request->input('course_name');
            $course->course_code = $request->input('course_code');
            $rule  =  array(
                'degree_id'    =>  'nullable',
                'degree_code'    =>  'required|unique:courses',
                'course_name'     =>  'required|unique:courses',
                'course_code'     =>  'required|unique:courses',
             ) ;
            $validator = Validator::make($request->all(), [
                'degree_id'    =>  'nullable',
                'degree_code'    =>  'required|unique:courses',
                'course_name'     =>  'required|unique:courses',
                'course_code'     =>  'required|unique:courses',            ]);
            if($validator->fails()) {
                return back()->withErrors($validator);
            }
            else{
            $course->save(); 
            
            return redirect()->route('course')->with('success','Record Added');

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
        
        $course = Course::find($id);
        return view('course.create', compact('course',$course));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $degrees = Degree::all();
        return view('course.edit', compact('course','degrees'));


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
            'degree_code'    =>  'nullable',
            'course_name'     =>  'nullable',
            'course_code'     =>  'nullable',
        ]);
        
        $course = Course::find($id);
        $course->degree_code = $request->input('degree_code');
        $course->course_name = $request->input('course_name');
        $course->course_code = $request->input('course_code');
        $course->save(); 
            
        return redirect()->route('course')->with('success','Record Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);

        $course->softDeletes();
        return redirect()->route('course')->with('success','Record Deleted');

    }
}