<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.dash');
    }

    public function addStaff()
    {
        return view('back.addStaff');
    }
    public function StaffList()
    {
        # code...
        $staffs = User::all();
        return view('back.staflist')
            ->with('staffs', $staffs);
    }


    public function store(Request $request)
    {


        $request->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required|max:30',
            'id_number' => 'required|max:30',
            'email' => 'required',
            'password' => 'required|confirmed',
            "shift_id" => "required",
            "account_type" => "required"
        ]);

        $picture = time() . '.' . $request->picture->extension();
        $insert =  $request->picture->move(public_path('images'), $picture);

        if ($insert) {
            $staff = new User;
            $staff->name = $request->name;
            $staff->id_number = $request->id_number;
            $staff->email = $request->email;
            $staff->password = $request->password;
            $staff->dept_id = $request->dept_id;
            $staff->picture = $picture;
            $staff->role_id = $request->role_id;
            $staff->shift_id = $request->shift_id;
            $staff->account_type = $request->account_type;
            $save = $staff->save();
        }
        if ($save) {
            Session::flash('success', 'You have successfully added the employee');
        } else {
            Session::flash('error', 'Something went wrong!');
        }
        return back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
