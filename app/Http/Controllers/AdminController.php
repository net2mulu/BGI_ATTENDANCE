<?php

namespace App\Http\Controllers;

use App\Models\User;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Encryption\DecryptException;

class AdminController extends Controller
{
public function Attendance(){


    $attend =Attendance::all();
    return view('back.attendance', compact('attend'));



}
    public function scan($value)
    {
        try{
        $decrypt = Crypt::decryptString($value);
         //return $decrypt;
        }catch(DecryptException $e){       
            return response(2);
        }   

        $user = User::where('id_number',$decrypt)->first();
        //  return $user;
        $attendance = new Attendance();
        $attendance->user_id = $user->id;
        $attendance->save();

        if($user){
            return response(json_encode($user));
        }
    }
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
        //dd($request->all());
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
            $card = Image::make('images/idc.png')->resize(5000, 3000);
            $pic = Image::make('images/'.$picture)->resize(1260, 1260);
            $card->insert($pic, '', 3580, 795);
            $dns = new DNS2D;
            $hashed = Crypt::encryptString($request->id_number);
            $barcode = Image::make($dns->getBarcodePNG($hashed, 'QRCODE'))->resize(950, 950);
            $card->insert($barcode, '', 189, 1990);
           
            $card->text('Name: ' . $request->name, 200, 800, function ($font) {
                $font->file(public_path('fonts/id.ttf'));
                $font->size(180);
                $font->color('#808080');
                //$font->align('center');
                $font->valign('top');
                $font->angle(0);
            });

            $card->text('Section: ' . ' ' . 'chemical', 200, 1100, function ($font) {
                $font->file(public_path('fonts/id.ttf'));
                $font->size(180);
                $font->color('#808080');
                // $font->align('center');
                $font->valign('top');
                $font->angle(0);
            });

            $card->text('Role: ' . ' ' . 'Staff', 200, 1400, function ($font) {
                $font->file(public_path('fonts/id.ttf'));
                $font->size(180);
                $font->color('#808080');
                // $font->align('center');
                $font->valign('top');
                $font->angle(0);
            });

            $card->text('Id-No: ' . $request->id_number, 3600, 2180, function ($font) {
                $font->file(public_path('fonts/Roboto-Regular.ttf'));
                $font->size(160);
                $font->color('#808080');
                //  $font->align('center');
                $font->valign('top');
                $font->angle(0);
            });
            $card->text('Automatically generated digital id card', 3600, 2900, function ($font) {
                $font->file(public_path('fonts/Roboto-Regular.ttf'));
                $font->size(80);
                $font->color('#808080');
                //$font->align('center');
                $font->valign('top');
                $font->angle(0);
            });
            $cardpic = $request->name.'.png';
            $pic =  $card->save(public_path('idcard/' . $cardpic), 100);
          //  return redirect(asset('idcard/' . $cardpic));
           
          $staff = new User;
            $staff->name = $request->name;
            $staff->id_number = $request->id_number;
            $staff->email = $request->email;
            $staff->password = Hash::make($request->password);
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
    public function update(Request $request)
    {
        // $request->validate([
        //     'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        //     'name' => 'required|max:30',
        //     'id_number' => 'required|max:30',
        //     'email' => 'required',
        //     'password' => 'required|confirmed',
        //     "shift_id" => "required",
        //     "account_type" => "required"
        // ]);

        if($request->hasFile('picture')){
            $picture = time() . '.' . $request->picture->extension();
            $insert =  $request->picture->move(public_path('images'), $picture);
        }
        $id = $request->update_id;
       


            $staff = User::where('id', $id)->first();
            $staff->name = $request->name;
            $staff->id_number = $request->id_number;
            $staff->email = $request->email;
            $staff->dept_id = $request->dept_id;
            if($request->picture){
                $staff->picture = $picture;
            }
            $staff->role_id = $request->role_id;
            $staff->shift_id = $request->shift_id;
            $staff->account_type = $request->account_type;

            $save = $staff->save();
    



        if ($save) {
            Session::flash('success', 'You have successfully added the employee');
        } else {
            Session::flash('error', 'Something went wrong!');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->delete_id;
        $user = User::where($id);
        $user->delete();
        Session::flash('success', 'Staff List is successfully Removed!');
        return back();
    }
    public function deleteAttendance(Request $request){

        $id = $request->delete_id1;
        $user = Attendance::where($id)->first();
        $user->delete();
        Session::flash('success', 'Staff List is successfully Removed!');
        return back();


    }
}
