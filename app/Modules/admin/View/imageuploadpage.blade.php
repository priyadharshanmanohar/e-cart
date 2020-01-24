
@extends('admin::layouts.admin')
@section('content')


<form action="addimagepage" method="POST" >


            {{ csrf_field() }}
         

                <!--Card image-->
                <div
                  class="view view-cascade gradient-card-header blue-gradient narrower py-3 mb-3 d-flex justify-content-between align-items-center">
              
                 
              
                  <a href="" class="white-text mx-3">Product List</a>
              
                  <div>
                   
                   
                  </div>
              
                </div>
                 <!--/Card image-->

  <div class="px-4">

      <div class="table-wrapper">
            <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                          <th class="th-sm">ID</th>
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
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->barcode }}</td>
                            <td>{{ $product->product_type }}</td>
                            
                             <td>   <button type="submit" name="addimage" value="{{ $product->id }}" class="btn btn-indigo btn-sm m-0">Add Image</button>
                                <br>
                                <br>
                            </form>
                                <form action="removeimagepage" method="GET" >
                                        {{ csrf_field() }}
                                <button type="submit" name="removeimage" value="{{ $product->id }}" class="btn btn-indigo btn-sm m-0">Remove Image</button>
                                <input type="hidden" value="{{$product->base_product_id}}" name="base_product_id">

                                </form> 
                          
                        </tr>
                        @endforeach
                     
                    </tbody>
                  
                  </table>
      </div>
  </div>
       
  

     <script>
        $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
     </script>
@endsection
 