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
<!--Navbar-->

<nav class="navbar navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="#">Admin Portal</a>
      
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
      
          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Add Product
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Add Image</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Add Description</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="#">Remove Product</a>
                  </li>
      
            <!-- Dropdown -->
            {{-- <li class="nav-item dropdown">
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
            </li> --}}
      
          </ul>
          <!-- Links -->
          <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                 </li>
                  
               
              </ul>
        </div>
        <!-- Collapsible content -->
      
      </nav>
      
  <!--/.Navbar-->
</header>
<!--Main Navigation-->
@yield('content')
<!--Main layout-->


<!--Footer-->
<footer>

</footer>
<!--Footer-->
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="/Applications/MAMP/htdocs/ecart/resources/js/mdjs/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/Applications/MAMP/htdocs/ecart/resources/js/mdjs/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/Applications/MAMP/htdocs/ecart/resources/js/mdjs/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/Applications/MAMP/htdocs/ecart/resources/js/mdjs/mdb.min.js"></script>
</body>

</html>