
@extends('admin::layouts.admin')
@section('content')



        <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center my-auto justify-content-center align-items-center">
                        <div class="card card-block d-flex justify-content-center align-items-center">
                                <h5 class="card-title">Baseproduct id:{{ $product->base_product_id }}</h5>
                                <div class="card-body align-items-center d-flex justify-content-center">
                                        
                                        <dl class="row card-text align-items-center justify-content-center">
                                            <ul class="list-group">
                        <li class="list-group-item">Title: {{ $product->title }} </li>
                      
                      <li class="list-group-item"> Description: {{ $product->description }} </li>
                      
                        <li class="list-group-item">Product Price: {{ $product->product_price }} </li>
                      
                       <li class="list-group-item">Barcode: {{ $product->barcode }} </li>
                         <li class="list-group-item"> Product Type: {{$product->product_type}}</li>
                       
                        
                        {{-- <li class="list-group-item">Images:
                       
                        <ul class="list-group list-group-horizontal">
                            @foreach($images as $image)
                                <li class="list-group-item"><img class="img-fluid z-depth-1" src="{{url('storage/' . $image->directory)}}"/></li>
                            @endforeach
                              </ul>
                        </li> --}}
                        
                                            </ul>
                </dl>
                        {{-- <dd class="col-sm-9"><img class="img-fluid z-depth-1" src="{{url('storage/' . $image->directory)}}"/>
                            </dd> --}}
                       
                           
             
          </div>
       
        </div>
      </div>
      <div class="col-md-3"></div>
        </div>

@endsection
 