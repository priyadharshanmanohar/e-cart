
@extends('admin::layouts.admin')
@section('content')

  <div id="usermanager">          
 <form action="edituser" method="POST">
        {{ csrf_field() }}
         <!--Card image-->
         <div
         class="view view-cascade gradient-card-header row narrower d-flex justify-content-between align-items-center">
     
      
     <div>
         <a href="" class=" mx-3">User List</a>
     </div>
         <div>
              
           {{-- <button type="submit" name="adduser" class="btn btn-outline-white btn-rounded btn-sm px-2"> --}}
            <a href="adduserpage" class="btn btn-indigo btn-sm m-0 waves-effect waves-light"> <i class="fas fa-pencil-alt mt-0">Add User</i></a>
           {{-- </button> --}}
               
          
         </div>
     
       </div>
       <hr class="my-4">
        <!--/Card image-->

                <div style="width: 100%;">
    
                   
      <div class="px-4">
    
          <div class="table-wrapper">
                <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                              
                              <th class="th-sm">Name</th>
                              <th class="th-sm">Email</th>
                              <th class="th-sm">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                                @foreach ($users as $user)
                                <tr>
                                   <td>{{ $user->name }}</td>
                                   <td>{{ $user->email }}</td>
                                   <td><!-- Default switch -->
                                    <label class="switch">
                                       <input data-id="{{$user->id}}" name="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->active ? 'checked' : '' }}>
                                       <span class="slider round"></span>
                                    </label>
                                   </td>
                                </tr>
                                @endforeach
                        </tbody>
                      
                      </table>
                     
          </div>
          
      </div>

      
         

{{-- End of datatable --}}
<div
class="justify-content-between align-items-center">

<button type="submit" class="btn btn-primary align-items-center" >Apply</button>
</div>            
 </form>
  </div>
      <p id="demo"></p>

      <script>
            $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
         </script>
      
         
@endsection
    