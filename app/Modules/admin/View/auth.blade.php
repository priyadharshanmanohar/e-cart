<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
 
  
</head>

<body>

  <!-- Start your project here-->
<!--Main Navigation-->
<header>

</header>
<!--Main Navigation-->
<!--Grid row-->
<div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-6 mx-auto">
               
        <!--Grid column-->
        
       
      
          <!--Card-->
          <div class="card">
      
            <!--Card image-->
            <div class="view overlay">
                
              {{-- <img src="/ecart/login.jpg" class="card-img-top" alt=""> --}}
              {{-- <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a> --}}
            </div>
      
            <!--Card content-->
           
                  
            <div class="card-body ">
              <!--Title-->
              <h4 style="text-align:center;">Enter Your Details</h4>
              <!--Text-->
              {{-- <form action="auth" method="POST" class="form-inline">
                {{ csrf_field() }}
                <input type="text" placeholder="Email" name="email" class="form-control" class="card-text mb-4">
                <br>
                <input type="password" placeholder="Password" name="password" class="card-text mb-4 form-control">
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
                <br>
                <a href="#" style="align:center;">Forgot Password?</a>
                
              </form> --}}
              <!-- Default form login -->
<form action="auth" method="POST" name="myForm" class="text-center p-5">
        {{ csrf_field() }}
        <p class="h4 mb-4">Sign in</p>
    
        <!-- Email -->
        <input type="email" id="defaultLoginFormEmail" value="{{session('email')}}" name="email" class="form-control mb-4" placeholder="E-mail">
    
        <!-- Password -->
        <input type="password" id="defaultLoginFormPassword" name="password" class="form-control mb-4" placeholder="Password">
    
        <div class="d-flex justify-content-around">
            <div>
                <!-- Remember me -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                    <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                </div>
            </div>
            <div>
                <!-- Forgot password -->
                <a href="">Forgot password?</a>
            </div>
        </div>
    
        <!-- Sign in button -->
        <button type="submit" class="btn btn-info btn-block my-4"  onclick= "return(validate());">Sign in</button>
      @if(session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    @endif
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
               

           
                
      
    
</div>
</div>
       
       
        <!--Grid column-->
      
   
      <!--Grid row-->
@yield("content")
<!--Main layout-->


<!--Footer-->
<footer>

</footer>
<!--Footer-->
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
<script type = "text/javascript">
   
       // Form validation code will come here.
       function validate() {
       
         
    

var email = document.getElementById('defaultLoginFormEmail').value;
var pword = document.getElementById('defaultLoginFormPassword').value;
atpos = email.indexOf("@");
         dotpos = email.lastIndexOf(".");
if(!email){
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Remove product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        Are you sure you want to remove the product with Base PID ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="remove"  name="remove" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
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
</body>

</html>