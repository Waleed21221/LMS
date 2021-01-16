<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultys = Faculty::orderBy('created_at' , 'desc')->paginate(3);
        return view('teacher.create', compact('facultys',$facultys));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faculty = new faculty;
        $faculty->course_id = $request->input('course_id');
        $faculty->user_id = $request->input('user_id');
        $faculty->staff_code = $request->input('staff_code');
        $faculty->first_name = $request->input('first_name');
        $faculty->last_name = $request->input('last_name');
            // $faculty->email = $request->input('email');
        $faculty->contact_number = $request->input('contact_number');
            // $faculty->address = $request->input('address');
        $rule  =  array(
            'course_id'    =>  'nullable',
            'user_id'    =>  'nullable',
            'staff_code'    =>  'required|unique:faculties',
            'first_name'     =>  'required',
            'last_name'    =>  'required',
            // 'email'     =>  'required',
            'contact_number'    =>  'required',
            // 'address'     =>  'required',
            ) ;
        $validator = Validator::make($request->all(), [
            'course_id'    =>  'nullable',
            'user_id'    =>  'nullable',
            'staff_code'    =>  'required|unique:faculties',
            'first_name'     =>  'required',
            'last_name'    =>  'required',
            // 'email'     =>  'required',
            'contact_number'    =>  'required',
            // 'address'     =>  'required',       
         ]);
            if($validator->fails()) {
                return back()->withErrors($validator);
            }
            else{

            $faculty->save(); 
        
            return back()->with('success','Record Added');

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
        
        $faculty = Faculty::find($id);
        return view('teacher.create', compact('faculty',$faculty));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculty = Faculty::find($id);

        return view('teacher.edit', compact('faculty',$faculty));
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
            'staff_code'    =>  'nullable',
            'first_name'     =>  'nullable',
            'last_name'    =>  'nullable',
            'email'     =>  'nullable',
            'contact_number'    =>  'nullable',
            'address'     =>  'nullable',

        ]);

        $faculty = Faculty::find($id);
        $faculty->staff_code = $request->input('staff_code');
        $faculty->first_name = $request->input('first_name');
        $faculty->last_name = $request->input('last_name');
        $faculty->email = $request->input('email');
        $faculty->contact_number = $request->input('contact_number');
        $faculty->address = $request->input('address');

        $faculty->save(); 
        return redirect('teacher')->with('success','Record Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faculty = Faculty::find($id);

        $faculty->delete();
        return redirect('teacher')->with('success','Record Deleted');

    }
}