<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $Dept = Department::all();
            return view('back.departmentList') ->with('Dept', $Dept);;
    
        
    
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $dept = new Department;

       $dept->name = $request->name;
       $save = $dept->save();
        
       if ($save) {
           Session::flash('success', 'You are successfully Added');
       } else {
           Session::flash('error', 'Something went wrong!');
       }
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = $request->id;
        $dept = Department::FindOrFail($id);
        $dept->name = $request->name;









        // $id = $request->id;
        // $dept = Department::FindOrFail($id);
        // $dept->delete();
       $save = $dept->save();
        
        if ($save) {
            Session::flash('success', 'You are successfully Updated the employee');
        } else {
            Session::flash('error', 'Something went wrong!');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        
        
        $id = $request->delete_id;
        $dept = Department::FindOrFail($id);
      $save = $dept->delete();
     
        
        if ($save) {
            Session::flash('success', 'Employ Successfully Removed');
        } else {
            Session::flash('error', 'Something went wrong!');
        }
        return back();
    }
}
