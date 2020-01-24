
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-cart</title>
  <!-- Font Awesome -->
  

  <script type="text/javascript" src="/js/mdjs/jquery.min.js"></script>
<!-- SCRIPTS -->
  <!-- JQuery -->
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/js/mdjs/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/js/mdjs/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/js/mdjs/addons/datatables.min.js"></script>
  <!-- MDBootstrap Datatables  -->
 <script type="text/javascript" src="/js/mdjs/mdb.min.js"></script>
  <!-- MDB core JavaScript -->
<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
    </script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.css" rel="stylesheet">
  
  <!-- Material Design Bootstrap -->
  <link href="/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="/css/style.css" rel="stylesheet">
<!-- MDBootstrap Datatables  -->
<link href="/css/addons/datatables.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/default.css">
</head>

<body>

  <!-- Start your project here-->
<!--Main Navigation-->
<header>
<!--Navbar-->
<div class="container-fluid"  style="padding:0px;">
<nav class="navbar navbar-expand-lg navbar-dark primary-color" style="position: fixed;">
  <!-- SideNav slide-out button -->

   
        <!-- Navbar brand -->
        <i class="fab fa-blogger" style="font-size:30px ;padding-left:20px;"></i>
        <ul class="navbar-nav ml-auto nav-flex-icons">
           
            <li class="nav-item" style="margin-right: 40px;  padding-left: 180px; "><a class="navbar-brand" href="/admin">Admin Portal</a></li>
        </ul>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
      
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item" style="margin-right: 40px; ">
                  <!-- Basic dropdown -->
                  <div id="userdropdown" class="btn-group btn-lg">
                     
                        <i class="fas fa-user-circle"  style="font-size:30px" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"></i>
                
                      <div class="dropdown-menu"style="left: -80px;width:auto">
                      
                     
                            <div class="container" 
                           style=" justify-content: center; ">
                           @foreach ($userList as $user)
                           <i class="far fa-user" style="display:block;    padding-inline-start: 22px;">{{$user->name}}</i>
                        @endforeach
                           
                           
                             <a class="nav-link btn btn-primary" href="/admin/logout">Logout</a>
                        
                       </div>
                      
                         
                    </div>
                   
                 </li>
                  
               
              </ul>
        </div>
        <!-- Collapsible content -->
      
      </nav>
     
          
        
</div>
<div id="mySidenav" class="sidenav sticky">
    {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> --}}
    <a class="nav-link  {{$curPage === 'product' ? 'active' : ''}} " href="/admin/editproductpage">Products</a>
    <a class="nav-link {{$curPage === 'image' ? 'active' : ''}}" href="/admin/imagemaster">Images</a>
    <a class="nav-link {{$curPage === 'user' ? 'active' : ''}}" href="/admin/usermanager">Users</a>
    <a class="nav-link {{$curPage === 'dashboard' ? 'active' : ''}}" href="/admin/dashboard">Dashboard</a>
  </div>
  <!--/.Navbar-->

<!-- Sidebar navigation -->

<!--/. Sidebar navigation -->
</header>

<!--Main Navigation-->
<div class="container" style="padding-top:70px;margin-left: 240px; 
max-width: 1204px;">
<div class="card w-100 p-3" style="background-color: #fff;  margin: 15px auto;">
@yield('content')
</div>
</div>
<!--Main layout-->


<!--Footer-->
<footer>


</footer>
<!--Footer-->
  <!-- /Start your project here-->

  
  
</body>

</html>