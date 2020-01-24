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
 <!-- SCRIPTS -->
  <!-- JQuery -->
  
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
</head>

<body>

  <!-- project-->
<!--Main Navigation-->
<header>
<!--Navbar-->
<div class="container-fluid" style="padding:0px;">
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Homepage</a>
  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Women</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Men</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="#">Girls</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Boys</a>
                    </li>
            @yield('content')
  
        </ul>
        <!-- Links -->
        <ul class="navbar-nav ml-auto">
                <li>
        <form action="#" method="POST" class="form-inline">
                
                   
               
                   
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        
        </li>
        <li>
        <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Product-1</a>
          <a class="dropdown-item" href="#">Product-2</a>
          <a class="dropdown-item" href="#">Product-3</a>
        </div>
        <button type="button" class="btn btn-primary">Basket</button>
      </div>
            </li> 
        </div>
            </ul>
       
       
       
        </form>
        
    </div>

    <!-- Collapsible content -->
  
  </nav>
</div>
  <!--/.Navbar-->
</header>
<!--Main Navigation-->
@yield('maincontent')
<!--Main layout-->


<!--Footer-->

<footer class="page-footer font-small blue pt-4 mt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
      
          <!-- Grid row -->
          <div class="row">
      
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
      
              <!-- Content -->
              <h5 class="text-uppercase">Footer Content</h5>
              <p>These are the footer links</p>
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none pb-3">
      
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
      
                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>
      
                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Link 1</a>
                  </li>
                  <li>
                    <a href="#!">Link 2</a>
                  </li>
                  <li>
                    <a href="#!">Link 3</a>
                  </li>
                  <li>
                    <a href="#!">Link 4</a>
                  </li>
                </ul>
      
              </div>
              <!-- Grid column -->
      
              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">
      
                <!-- Links -->
                <h5 class="text-uppercase">Links</h5>
      
                <ul class="list-unstyled">
                  <li>
                    <a href="#!">Link 1</a>
                  </li>
                  <li>
                    <a href="#!">Link 2</a>
                  </li>
                  <li>
                    <a href="#!">Link 3</a>
                  </li>
                  <li>
                    <a href="#!">Link 4</a>
                  </li>
                </ul>
      
              </div>
              <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->
      
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      
      </footer>
<!--Footer-->
  <!-- project-->

  
</body>

</html>