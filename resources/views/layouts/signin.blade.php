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
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
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
                <div class="jumbotron">

        <!--Grid column-->
        
       
      
          <!--Card-->
          <div class="card">
      
            <!--Card image-->
            <div class="view overlay">
                <h3 style="text-align:center;">Sign In</h3>
              <img src="/ecart/login.jpg" class="card-img-top" alt="">
              {{-- <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a> --}}
            </div>
      
            <!--Card content-->
           
                  
            <div class="card-body ">
              <!--Title-->
              <h4 style="text-align:center;">Enter Your Details</h4>
              <!--Text-->
              <form action="/action_page.php" class="form-inline">
                <input type="text" placeholder="Username" name="username" class="card-text">
                <br>
                <input type="text" placeholder="Password" name="psw" class="card-text">
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
                <br>
                <a href="#" style="align:center;">Forgot Password?</a>
              </form>
              
            </div>
                
      
          </div>
          <!--/.Card-->
        </div>
    </div>
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
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>