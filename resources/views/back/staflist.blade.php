@extends('back.layouts.back')

@section('main')
<div class="box">
    <div class="box-header with-border">
      <div class="row">
        <div class="col-8">
        <h3 class="box-title">Staff List</h3>
        <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
      </div>
      <div class="col-4">
        <button class="btn btn-primary " data-toggle="modal" data-target="#add_modal"   > Add Staff </button>
    
      </div>
    </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
                <tr>
                    <th>Picture</th>
                    <th>Full Name</th>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Account Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffs as $staff)
                <tr> 
                    <td><img src="{{ asset('images/'.$staff->picture) }}" id="imgg" onclick="image_view(this.src,'{{ $staff->name }}')" class="avatar avatar-lg bg-primary-light rounded100" alt="User Image" ></td>
                    <td>{{$staff->name }}</td>
                    <td>{{$staff->id_number }}</td>
                    <td>{{$staff->role_id }}</td>
                    <td>{{$staff->dept_id }}</td>
                    <td>{{$staff->account_type }}</td>
                    <td><a class="waves-effect  btn  btn-success btn-xs mb-5"
                       onclick='editStaff(" {{ $staff->id }}", "{{ $staff->name }}", "{{ $staff->id_number }} ", 
                       "{{ $staff->role_id }}", "{{ $staff->dept_id }}", "{{ $staff->account_type }}", "{{ $staff->qr_code }}",
                        "{{ $staff->email }}", "{{ $staff->shift_id }}", "{{ $staff->id }}" )'
                       href="#"><i class="fa fa-pencil-square" data-toggle="modal" data-target="#modal-edit"></i></a>
                        <a class="waves-effect  btn  btn-warning btn-xs mb-5" onclick="card_view('{{ $staff->name }}')" href="#"><i class="fa fa-id-card" data-toggle="modal" data-target="#modal-default"></i></a>
                        <a class="waves-effect  btn  btn-danger btn-xs mb-5"  onclick="deleteStaff({{ $staff->id }})" href="#"><i class="fa fa-trash" data-toggle="modal" data-target="#modal-danger"  ></i></a>
                    </td>
                </tr>
                @endforeach
                
            
            </tbody>				  
            <tfoot>
                <tr>
                    <th>Picture</th>
                    <th>Full Name</th>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Account Type</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
        </div>              
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->   
  
    <!-- Modal -->
    <div class="modal modal-left fade" id="modal-edit" tabindex="-1" >
        <div class="modal-dialog" >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Modal</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="overflow: auto;    overflow-x: hidden;"  >
              
              <form action="{{ route('updateStaff') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <input type="text" name="update_id" id="update_id">
              <div class="form-group">
                <label>Staff Full Name</label>
                <input required type="text" name="name" id="name" class="form-control" placeholder="Full Name">
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="form-group">
                <label>Staff Id Number</label>
                <input required type="text" name="id_number" id="id_number" class="form-control" placeholder="Id Number">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input required type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            {{-- <div class="form-group">
                <label>Password </label>
                <input required type="password" name="password" class="form-control" placeholder="Password">
            </div>
            
            <div class="form-group">
                <label>Confirm Password</label>
                <input required type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
            </div> --}}
    
            <div class="form-group">
                <label>Department</label>
                <select required name="dept_id" id="dept" class="form-control">
                <option value="1">Desing</option>
                <option>Botteling</option>
                </select>
            </div>
    
            <div class="form-group">
                <label>Role</label>
                <select  name="role_id" id="role" class="form-control">
                <option value="staff">Staff</option>
                <option>Admin</option>
            
                </select>
            </div>
    
            <div class="form-group">
                <label>Shift</label>
                <select  name="shift_id" id="shift" class="form-control">
                <option value="staff">Morning</option>
                <option>After Noon</option>
                <option>Night</option>
                </select>
            </div>
    
            <div  class="form-group">
                <label>Account Type</label>
                <select required name="account_type" id="account_type" class="form-control">
                <option value="permanent">Permanent</option>
                <option value="temporary">Temporary</option>
                </select>
            </div>
    
            <div class="form-group row">
                <label class="col-form-label col-lg-2">Staff Picture</label>
                <div class="col-lg-12">
                    <div class="custom-file">
                        <input  type="file" name="picture" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>  
    
           

            </div>
            <div class="modal-footer modal-footer-uniform">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary float-right">Save changes</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    <!-- /.modal -->


   <!-- modal Area -->              
    {{-- <div class="modal fade" id="modal-default">
    <div class="modal-dialog" role="document"> 
  --}}
      <div class="modal fade bd-example-modal-lg"  id="modal-default" tabindex="-1" >
        <div class="modal-dialog modal-lg">

     




      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Download Staff Card </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
         <img src="" alt="" id="card_bgi" srcset="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <a href="" class="btn btn-primary float-right" download="" id="down_id">Download Now</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

  <!-- /.modal -->

  <div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">Delete Confirmation</h4>
          <form action="{{ route('deletStaff') }}" method="post">
            @csrf
          <input type="text" name="delete_id" hidden id="delete_id">
          <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <p>Are you sure data will ....&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger float-right">Delete</button>
        </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

  <!-- Modal -->
  <div class="modal center-modal fade" id="modal-center" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body " id="llllllll">


        <img src="" class="bg-primary-light " id="image_view" alt="User Image">
         
        </div>
        <div style="text-align: center" class="modal-footer modal-footer-uniform">
          <h2 id="mod_name"  class="modal-title"></h2>
        </div>
      </div>
    </div>
  </div>
<!-- /.modal -->



<div class="modal fade bd-example-modal-lg" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body " id="llllllll">

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
      </div>
     
    </div>
  </div>
</div>





























<script>
  let id;

function deleteStaff(id){


document.getElementById("delete_id").value = id;
}
function editStaff(id, name, id_number, role, dep, account_type, qr, email, shift, update_id){


  document.getElementById("name").value = name;
  document.getElementById("id_number").value = id_number;

  document.getElementById("email").value = email;

  document.getElementById("dept").value = dep;
  document.getElementById("role").value = role;

  document.getElementById("shift").value = shift;
  document.getElementById("update_id").value = update_id;



}
function card_view(name){
  console.log(name);
  let path = 'idcard/'+name+'.png';
  $('#modal-default').modal('show'); 
  
  $('#card_bgi').attr('src',path);
  $('#down_id').attr('href',path);
  $('#down_id').attr('download',src);





  console.log(name);
}
function image_view(src,name){

  $('#modal-center').modal('show'); 
  $('#image_view').attr('src',src);
  $('#mod_name').text(name);


}




</script>









@endsection


