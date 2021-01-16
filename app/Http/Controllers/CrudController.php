<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crud = Crud::all()->toArray();
        return view('crud.index', compact('crud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->route('program')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = Crud::find($id);
        return view('crud.edit',compact('crud','id'));

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
        $this->validate($request,[
             'name'    =>  'required',
            'code'     =>  'required',
            'description'     =>  'required'
        ]);
        $crud = Crud::find($id);
        $crud->name = $request->get('name');
        $crud->code = $request->get('code');
        $crud->description = $request->get('description');
        $crud->save();
        return redirect()->route('crud.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = Crud::find($id);
        $crud->delete();
        return redirect()->route('crud.index')->with('success','Data Deleted');
    }
}
