@extends('back.layouts.back')

@section('main')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Staff List</h3>
      <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
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
                    <th>Qr Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffs as $staff)
                <tr>
                    <td><img src="{{'images/'.$staff->picture}}" class="avatar avatar-lg bg-primary-light rounded100" alt="User Image" data-toggle="modal" data-target="#modal-center"></td>
                    <td>{{$staff->name }}</td>
                    <td>{{$staff->id_number }}</td>
                    <td>{{$staff->role_id }}</td>
                    <td>{{$staff->dept_id }}</td>
                    <td>{{$staff->account_type }}</td>
                    <td>{{$staff->qr_code }}</td>
                    <td><a class="waves-effect  btn  btn-success btn-xs mb-5" href="#"><i class="fa fa-pencil-square" data-toggle="modal" data-target="#modal-edit"></i></a>
                        <a class="waves-effect  btn  btn-warning btn-xs mb-5" href="#"><i class="fa fa-id-card" data-toggle="modal" data-target="#modal-default"></i></a>
                        <a class="waves-effect  btn  btn-danger btn-xs mb-5" href="#"><i class="fa fa-trash" data-toggle="modal" data-target="#modal-danger"></i></a>
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
                    <th>Qr Code</th>
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
    <div class="modal modal-left fade" id="modal-edit" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Your content comes here</p>
            </div>
            <div class="modal-footer modal-footer-uniform">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary float-right">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    <!-- /.modal -->


   <!-- modal Area -->              
   <div class="modal fade" id="modal-default">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Default Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-right">Save changes</button>
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
          <h4 class="modal-title">Danger Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger float-right">Delete</button>
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
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Your content comes here</p>
        </div>
        <div class="modal-footer modal-footer-uniform">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary float-right">Save changes</button>
        </div>
      </div>
    </div>
  </div>
<!-- /.modal -->
@endsection