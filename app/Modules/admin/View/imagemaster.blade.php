@extends('admin::layouts.admin')
@section('content')

<!-- PAGE'S BASE CSS -->

    
    
<script src="/gallery/lib/jquery.js" type="text/javascript"></script>

<script src="/gallery/js/lc_lightbox.lite.js" type="text/javascript"></script>
<link rel="stylesheet" href="/gallery/css/lc_lightbox.css" />


<!-- SKINS -->
<link rel="stylesheet" href="/gallery/skins/minimal.css" />
<link rel="stylesheet" href="/css/default.css">

<!-- ASSETS -->
<script src="/gallery/lib/AlloyFinger/alloy_finger.min.js" type="text/javascript"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>
      <div id="imagemaster">
<div class="row">
        <div
        class="view view-cascade gradient-card-header row narrower d-flex justify-content-between align-items-center" style="width:100%;">
    
       
    
        {{-- <a class="white-text mx-3"><div id="baseid"></div></a> --}}
    
        
   <div class="col-md-4">
                <input required type="search" name="search" id="search" class="form-control form-control-sm justify-content-between align-items-center" placeholder="Base Product ID" aria-controls="dtBasicExample" > 
         
                <button type="button" id="submit" class="btn btn-primary" >Search</button>
       
   </div>
   <div class="col-md-4"></div>
   <div class="col-md-4">
                    <div id="addimages"><div id="error"></div></div>
                                 
   </div>  
                          
                        
            </div>
           
        </div>
        <hr class="my-4">
<div class="row">
        <div class="col-md-6">
              <ul class="list-group">
                <div id="text1">
                        
                    </div>
                </ul>
                       
                        
                                            
        </div>
        <div class="col-md-6">
                <ul class="list-group">
                       <div id="text2">
                       </div>
                </ul>
        </div>
        
</div>
<div id="hr">
    </div>
   
<div class="row">
        <div id="Container">
        
                <br>
                <div id="Content" >
                
                   
        <div id="displayimage">
           
            </div>
               
        </div>
        </div>
                
        <br>
                
        <hr class="my-4">    
</div>
      </div>
 <!-- //////////////////////////////////////////////// -->
            <!-- LIGHTBOX INITIALIZATION -->
            <script type="text/javascript">
                $(document).ready(function(e) {
                   
                    // live handler
                    lc_lightbox('.elem', {
                        wrap_class: 'lcl_fade_oc',
                        gallery : true,	
                        thumb_attr: 'data-lcl-thumb', 
                        
                        skin: 'minimal',
                        radius: 0,
                        padding	: 0,
                        border_w: 0,
                    });	
                
                });
                </script>
        <script>
                $(document).ready(function(){
                
                //  fetch_customer_data();
                
                 function fetch_data(query)
                 {
                  $.ajax({
                   url:"/admin/search",
                   method:'GET',
                   data:{query:query},
                   headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                   dataType:'json',
                   success:function(data)
                   {
                    $('#text1').html(data.table_data1);
                    
                   $('#text2').html(data.table_data2);
                    $('#addimages').html(data.addImages);
                    $('#displayimage').html(data.msg);
                    $('#hr').html(data.hr);
                    $('#error').html(data.error);
                   
                    $('div#Container').addClass("container");
                    $('div#Content').addClass("content");
                   // $('#total_records').text(data.total_data);
                   }
                  })
                 }
                
                 $('#submit').on('click', function(){
                  var query = $('#search').val();
                  fetch_data(query);
                 });
                });
                </script>
                
@endsection
 