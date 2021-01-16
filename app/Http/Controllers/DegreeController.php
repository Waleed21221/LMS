<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Degree;
use Illuminate\Support\Facades\Validator;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $degrees = Degree::orderBy('created_at' , 'desc')->paginate(3);
        return view('degree.create',compact('degrees'));
    
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('degree');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $degree = new Degree;
            $degree->degree_name = $request->input('degree_name');
            $degree->degree_code = $request->input('degree_code');
            $rule  =  array(
                'degree_name'       => 'required',
                'degree_code'         => 'required|unique',
             ) ;
            $validator = Validator::make($request->all(), [
                'degree_name'    =>  'required',
                'degree_code'     =>  'required|unique:degrees|max:255',
             
            ]);
            if($validator->fails()) {
                return back()->withErrors($validator);
            }
            else{
            $degree->save(); 
            return redirect()->route('degree')->with('success','Record Added');
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
        
        $degree = Degree::find($id);
        return view('degree.create', compact('degree',$degree));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $degree = Degree::find($id);

        return view('degree.edit', compact('degree',$degree));
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
       

        $degree = Degree::find($id);
        $degree->degree_name = $request->input('degree_name');
        $degree->degree_code = $request->input('degree_code');

        $degree->save(); 
        return redirect()->route('degree')->with('success','Record Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $degree = Degree::find($id);

        $degree->delete();
        return redirect()->route('degree')->with('success','Record Deleted');

    }
}
