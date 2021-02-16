@extends('back.layouts.back')

@section('main')
<div class="box">
    <div class="box-header with-border  row" style="content-align: space-between">
      <div class="row">
      <div class="col-8">
      <h3 class="box-title">Staff List</h3>
      <h6 class="box-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
    </div>
    <div class="col-4">
      <button class="btn btn-primary " data-toggle="modal" data-target="#modal-insert"> Add Department</button>
  
    </div>
  </div>
  </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">

            <thead>
                <tr>
                    <th>Full Name</th>
                   
                    <th style="align-content:stretch"> Action 
                    </th> 
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($Dept as $dept)
                <tr> 
                    <td>{{$dept->name }}</td>
           
                    <td><a class="waves-effect  btn  btn-success btn-xs mb-5"
                       onclick='editDept(" {{ $dept->id }}", "{{ $dept->name }}" )'
                       href="#"><i class="fa fa-pencil-square" data-toggle="modal" data-target="#modal-edit"></i></a>
                      
                        <a class="waves-effect  btn  btn-danger btn-xs mb-5"  onclick="deleteDept({{ $dept->id }})" href="#"><i class="fa fa-trash" data-toggle="modal" data-target="#modal-danger"  ></i></a>
                    </td>
                </tr>
                @endforeach
                
            
            </tbody>				  
            <tfoot>
                <tr>
             
                    <th>Full Name</th>
                    <th>Action   </th>
                   
                </tr>
            </tfoot>
        </table>
        </div>              
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->   
  
    <!-- Modal -->
    <div class="modal fade" id="modal-edit">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action=" {{ route('updateDepartment') }}   " method="post">
            @csrf
          <div class="modal-header">
            <h4 class="modal-title">Edit  Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
            <input type="text" name="name" id="name" class="form-control">
            <input type="text" name="id" hidden id="dept_id">
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary float-right">Save changes</button>
          </div>
        </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
    <!-- /.modal -->


   <!-- modal Area -->              
   {{-- <div class="modal fade" id="modal-insert">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="   " method="post">
        <div class="modal-header">
          <h4 class="modal-title">Add Department</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        <input type="text" class="form-control" name="name" id="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary float-right">Save changes</button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div> --}}


<div class="modal fade"  id="modal-insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action=" {{ route('insertDepartment') }}  " method="post">
        @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
        <input type="text"  class="form-control" required name="name" id="">


      </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Department </button>
      </div>
    </form>
    </div>
  </div>
</div>







<!-- /.modal -->

  <!-- /.modal -->

  <div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">Delete Confirmation</h4>
          <form action="{{ route('deleteDepartment') }}" method="post">
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


<script>
  let id;

function deleteDept(id){


document.getElementById("delete_id").value = id;
}
function editDept(id, name){


  document.getElementById("name").value = name;
  document.getElementById("dept_id").value = id;

}
function image_view(src,name){

  $('#modal-center').modal('show'); 
  $('#image_view').attr('src',src);
  $('#mod_name').text(name);


}




</script>









@endsection


