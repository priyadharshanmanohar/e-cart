@extends('admin::layouts.admin')
@section('content')
<div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-6 mx-auto">
               
        <!--Grid column-->
        
       
      
          <!--Card-->
          <div >
      
            <!--Card image-->
            <div class="view overlay">
                
              {{-- <img src="/ecart/login.jpg" class="card-img-top" alt=""> --}}
              {{-- <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a> --}}
            </div>
      
            <!--Card content-->
           
                  
            <div >
              <!--Title-->
              <h4 style="text-align:center;">Enter User Details</h4>
        
<form action="adduser" method="POST" name="myForm" class="text-center border border-light p-5">
        {{ csrf_field() }}
        
    
        <!-- Email -->
        <input required type="email" id="defaultLoginFormEmail" name="email" class="form-control mb-4" placeholder="E-mail">
        <input required type="text" id="defaultLoginFormName" name="name" class="form-control mb-4" placeholder="Name">

        <!-- Password -->
        <input required type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Password">
        
           
        <label for="exampleForm6">User Type:</label>
        <select required class="browser-default custom-select" id="exampleForm6" name="user_type">
               
                <option value="admin">Admin</option>
                <option value="image_editor">Image Editor</option>
                <option value="content_editor">Content Editor</option>
              </select>
        <div class="d-flex justify-content-around">
           
           
        </div>
    
        <!-- Sign in button -->
        <button type="submit" class="btn btn-info btn-block my-4"  onclick= "return(validate());">Submit</button>
      @if (session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    </form>
    <!-- Default form login -->
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            
                 @endif
               
@endif
           
                
      
          </div>
          <!--/.Card-->
        </div>
    
</div>
</div>
       
       
        <!--Grid column-->
      
   
      <!--Grid row-->
@yield("content")
<!--Main layout-->


<script type = "text/javascript">
   
       // Form validation code will come here.
       function validate() {
       
         
    

var email = document.getElementById('defaultLoginFormEmail').value;
var pword = document.getElementById('defaultLoginFormPassword').value;
atpos = email.indexOf("@");
         dotpos = email.lastIndexOf(".");
if(!email){
    alert( "Please provide your Email!" );
    return false;
}
else if(atpos < 1 || ( dotpos - atpos < 2 )){
   
         
          {
            alert("Please enter a valid email ID")
            //document.myForm.EMail.focus() ;
            return false;
         }
         return( true );
}
else if(!pword){
    alert( "Please provide your Password!" );
    return false;
}
else{
    return true;
}
       }
    //-->
 </script>

@endsection