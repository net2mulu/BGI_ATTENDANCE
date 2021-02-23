@extends('back.layouts.back')

@section('main')

<div class="box-body">
    <div class="table-responsive">
      <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
        <thead>
            <tr>
                <th>Picture</th>
                <th>Full Name</th>
                <th>ID</th>
                <th>Role</th>
                <th>Date</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attend as $staff)
            <tr> 
                <td><img src="{{ asset('images/'.$staff->user->picture) }}" id="imgg" onclick="image_view(this.src,'{{ $staff->name }}')" class="avatar avatar-lg bg-primary-light rounded100" alt="User Image" ></td>
                <td>{{$staff->user->name }}</td>
                <td>{{$staff->user->id_number }}</td>
                <td>{{$staff->user->role_id }}</td>
                <td>{{$staff->dateonly }}</td>
                <td>{{$staff->timeonly }}</td>
                <td> 
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
                <th>Date</th>
               <th>Time</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>
    </div>              
</div>

<div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">Delete Confirmation</h4>
          <form action="{{ route('deleteAttendance') }}" method="post">
            @csrf
          <input type="text" name="delete_id"  id="delete_id">
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



<script >


function deleteStaff(id){

console.log(id);
document.getElementById("delete_id").value = id;
}



</script>
    
@endsection