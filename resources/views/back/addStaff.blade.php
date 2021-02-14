@extends('back.layouts.back')

@section('main')
<div class="col-lg-12"> 
<div class="box">
	<form action="{{ route('saveStaff')}}" method="POST" enctype="multipart/form-data">
       @csrf
        <div class="box-header with-border">
            <h4 class="box-title">Add A Staff</h4>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label>Staff Full Name</label>
            <input required type="text" name="name" class="form-control" placeholder="Full Name">
        </div>
        <div class="form-group">
            <label>Staff Id Number</label>
            <input required type="text" name="id_number" class="form-control" placeholder="Id Number">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input required type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label>Password </label>
            <input required type="password" name="password" class="form-control" placeholder="Password">
        </div>
        
        <div class="form-group">
            <label>Confirm Password</label>
            <input required type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
        </div>

        <div class="form-group">
            <label>Department</label>
            <select required name="dept_id" class="form-control">
            <option value="1">Desing</option>
            <option>Botteling</option>
            </select>
        </div>

        <div class="form-group">
            <label>Role</label>
            <select  name="role_id" class="form-control">
            <option value="staff">Staff</option>
            <option>design</option>
            </select>
        </div>

        <div class="form-group">
            <label>Shift</label>
            <select  name="shift_id" class="form-control">
            <option value="staff">Morning</option>
            <option>After Noon</option>
            </select>
        </div>

        <div  class="form-group">
            <label>Account Type</label>
            <select required name="account_type" class="form-control">
            <option value="permanent">Permanent</option>
            <option value="temporary">Temporary</option>
            </select>
        </div>

        <div class="form-group row">
            <label class="col-form-label col-lg-2">Staff Picture</label>
            <div class="col-lg-12">
                <div class="custom-file">
                    <input required type="file" name="picture" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>  

        <div class="form-group">
            <div class="col-form-label col-lg-12">
                <div >
                    <button type="submit" class="btn btn-warning btn-block">Add</button>
                </div>
            </div>
        </div>

</form>				  
</div>
</div>
@endsection