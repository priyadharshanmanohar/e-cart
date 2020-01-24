
@extends('admin::layouts.admin')
@section('content')


<form action="removeproduct" method="POST">



            {{ csrf_field() }}
          

                <!--Card image-->
                <div
                  class="view view-cascade gradient-card-header row narrower d-flex justify-content-between align-items-center">
              
               
              
                  <a href="" class="mx-3">Product List</a>
              
                  <div>
                   
                      <a href="adddetailspage" class="btn btn-indigo btn-sm m-0 waves-effect waves-light"><i class="fas fa-pencil-alt mt-0">Add Product</i></a>
                  
                        <a href="addproductpage" class="btn btn-indigo btn-sm m-0 waves-effect waves-light"><i class="fas fa-pencil-alt mt-0">Add Product in Bulk</i></a>
                      
                     
                    </div>
              
                </div>
                <hr class="my-4">
                 <!--/Card image-->
                
  <div class="px-4">

      <div class="table-wrapper">
            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                          <th class="th-sm">Base ID</th>
                          <th class="th-sm">Title</th>
                          <th class="th-sm">Description</th>
                          <th class="th-sm">Product Price</th>
                          <th class="th-sm">Barcode</th>
                          <th class="th-sm">Product Type</th>
                          <th class="th-sm">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                            @foreach ($productList as $product)
                        <tr>
                            <td>{{ $product->base_product_id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->barcode }}</td>
                            <td>{{ $product->product_type }}</td>
                            <td>
                                {{-- <button type="submit" id="remove"  name="remove" value="{{ $product->id }}" class="btn btn-indigo btn-sm m-0"  >Remove</button> --}}
                                <!-- Button trigger modal -->
<button type="button" class="btn btn-indigo btn-sm m-0" data-toggle="modal" data-target="#basicExampleModal">
    Remove
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Remove product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        Are you sure you want to remove the product with Base PID {{$product->base_product_id}}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="remove"  name="remove" value="{{ $product->base_product_id }}" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>
                                <input type="hidden" value="{{$product->base_product_id}}" name="base_product_id">
                              </form>
                                <form action="viewproduct" method="POST" style="display: inline;">
                                   {{ csrf_field() }}
                                <button type="submit"  name="view" value="{{ $product->base_product_id }}" class="btn btn-indigo btn-sm m-0">View</button>
                                </form>
                              </td>
                        </tr>
                        @endforeach
                     
                    </tbody>
                  
                  </table>
                  @if(session()->has('message'))
                  <div class="alert alert-success text-centre">
                          {{ session()->get('message') }}
                      </div>
                  
                  @endif
      </div>
  </div>
      
     </div>
      
    

     <script>
        $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});

     </script>
      
@endsection
 
