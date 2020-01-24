
@extends('admin::layouts.admin')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>
       <script>
        
     </script>
    
   <div class="container">
        <div class="row  ">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center my-auto justify-content-center  ">
                        <div class="justify-content-center  ">
                                
                    <h5 class="card-title">Baseproduct id:{{ $product->base_product_id }}</h4>
                        <div class="card-body align-items-center d-flex justify-content-center">
                                <dl class="row card-text align-items-center justify-content-center">
                            <dt class="col-sm-6">Title</dt>
                            <dd class="col-sm-6">{{ $product->title }} </dd>
                          
                            <dt class="col-sm-6">Description</dt>
                            <dd class="col-sm-6"> {{ $product->description }} </dd>
                          
                            <dt class="col-sm-6">Product Price</dt>
                            <dd class="col-sm-6"> {{ $product->product_price }} </dd>
                          
                            <dt class="col-sm-6 ">Barcode</dt>
                            <dd class="col-sm-6">   {{ $product->barcode }} 
                            </dd>
    
                            <dt class="col-sm-6 ">Product Type</dt>
                            <dd class="col-sm-6">   {{ $product->product_type}} 
                            </dd>
                            <dd class="col-sm-12">      
                    
                              <form action="storeimage" method="POST" enctype="multipart/form-data" class="form-inline">
                                {{ csrf_field() }}
                              <div class="custom-file" style="width: auto; margin:auto">
                                    <input type="file" name="image_file"  class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01"/>
                                    
                                    <label class="custom-file-label" for="customFileLang">Choose Image</label>
                                    {{-- <input class="custom-file-input" type="submit" value=" Save " lang="en" > --}}

                                         <input class="btn btn-primary" type="submit" value=" Save " style="margin:auto padding-top:10px;"/>
                                       {{-- <a href="#" name="baseproductid" value="{{$product->base_product_id}}" style="display:hidden;"></a> --}}
                                    <input type="hidden" value="{{$product->base_product_id}}" name="base_product_id">
                                      

                                  </div>
                            </form>
                            </dd>
                    </dl>
                 
                 
                   
            <div id="demo">      
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                
                @endif
            </div>
            @if(session()->has('message'))
<div class="alert alert-success">
        {{ session()->get('message') }}
    </div>

@endif
   
  
    </div>
    </div>
     <div class="col-md-3"></div>
    </div>
    </div>

        
@endsection
 