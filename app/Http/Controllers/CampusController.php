<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campus;
use Illuminate\Support\Facades\Validator;

class CampusController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $campuses = Campus::orderBy('created_at' , 'desc')->paginate(3);
        return view('campus.create',compact('campuses'));
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('campus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campus = new campus;
            $campus->name = $request->input('name');
            $campus->phone = $request->input('phone');
            $campus->fax = $request->input('fax');
            $campus->email = $request->input('email');
            $campus->address = $request->input('address');
            $rule  =  array(
                'name'   => 'required|unique:campuses',
                'phone'  => 'required',
                'fax'    => 'required',
                'email'  => 'required|unique:campuses',
                'address'=> 'required',
             ) ;
            $validator = Validator::make($request->all(), [
                'name'   => 'required|unique:campuses',
                'phone'  => 'required',
                'fax'    => 'required',
                'email'  => 'required|unique:campuses',
                'address'=> 'required',             
            ]);
            if($validator->fails()) {
                return back()->withErrors($validator);
            }
            else{
            $campus->save(); 
            
            return redirect()->route('campus')->with('success','Record Added');

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
        
        $campus = Campus::find($id);
        return view('campus.create', compact('campus',$campus));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campus = Campus::find($id);

        return view('campus.edit', compact('campus',$campus));
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
        'name'    =>  'nullable',
        'phone'     =>  'nullable',
        'fax'     =>  'nullable',
        'email'     =>  'nullable',
        'address'     =>  'nullable',
        ]);
        
        $campus = Campus::find($id);
        $campus->name = $request->input('name');
        $campus->phone = $request->input('phone');
        $campus->fax = $request->input('fax');
        $campus->email = $request->input('email');
        $campus->address = $request->input('address');

        $campus->save(); 
        return redirect()->route('campus')->with('success','Record Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campus = Campus::find($id);

        $campus->delete();
        return redirect()->route('campus')->with('success','Record Deleted');

    }
}