
@extends('admin::layouts.admin')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>
      <div class="row">
            <dd class="col-sm-4 justify-content-center">   </dd>

      <dd class="col-sm-4 justify-content-center">   
          <div> 
            <form action="store" method="POST" enctype="multipart/form-data" class="justify-content-center">
                {{ csrf_field() }}
                <div class="custom-file" style="width: auto; margin:auto">
                        <input type="file" name="csv_file" class="custom-file-input" id="inputGroupFile01"
                        aria-describedby="inputGroupFileAddon01">
                        
                        <label class="custom-file-label" for="customFileLang">Choose File</label>
                        {{-- <input class="custom-file-input" type="submit" value=" Save " lang="en" > --}}
                    </div>
                             <input class="btn btn-primary" type="submit" value=" Upload" style="padding-top:10px; "/>
                           {{-- <a href="#" name="baseproductid" value="{{$product->base_product_id}}" style="display:hidden;"></a> --}}
                        
                          

                  

       
            </form>
          </div>
      </dd>
      <dd class="col-sm-4 justify-content-center">   </dd>
      </div>
            <br>
        
            <div id="demo " class="text-centre">      
                    @if ($errors->any())
                    <div class="alert alert-danger text-centre">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li >{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                
                @endif
            </div>
            @if(session()->has('message'))
<div class="alert alert-success text-centre">
        {{ session()->get('message') }}
    </div>

@endif
    

           
@endsection
 