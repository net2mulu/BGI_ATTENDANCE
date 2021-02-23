<?php

namespace App\Http\Controllers;

use App\Models\shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Collection extends Controller
{
    //
    public function Shiftindex()
    {
        // return "this is Collection controll";
        $shift = shift::all();
        return view('back.shiftList', compact('shift'));

    }

    public function ShiftDelete(Request $request)
    {
          
        $id = $request->delete_id;
        $dept = shift::FindOrFail($id);
      $save = $dept->delete();
     
        
        if ($save) {
            Session::flash('success', 'Employ Successfully Removed');
        } else {
            Session::flash('error', 'Something went wrong!');
        }
        return back();
    }
public function ShiftInsert(Request $request)
{
    $dept = new shift;

       $dept->name = $request->name;
       $dept->inTime = $request->inTime;
       $dept->outTime = $request->outTime;
       $save = $dept->save();
        
       if ($save) {
           Session::flash('success', 'You are successfully Added');
       } else {
           Session::flash('error', 'Something went wrong!');
       }
       return back();
    }




    public function ShiftUpdate(Request $request)
    {
        # code...


        $id = $request->id;
        $dept = shift::FindOrFail($id);
        $dept->name = $request->name;
        $dept->inTime = $request->inTime;
        $dept->outTime = $request->outTime;




       $save = $dept->save();
        
        if ($save) {
            Session::flash('success', 'You are successfully Updated the employee');
        } else {
            Session::flash('error', 'Something went wrong!');
        }
        return back();
    }
}
