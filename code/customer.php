<?php require('db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BMW</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
       <img src="logo.jpg"width = "30" height="30" class="d-inline-block align-top" alt='' loading = "lazy">BMW
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class = "nav-item">
            <a class="nav-link js-scroll-trigger" href="#new_arrivals">New Arrivals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#model">Model</a>
          </li>
          <li class="nav-item">
            <a class = "nav-link js-scroll-trigger" href="#book">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br>
<br>
<br>
<br>
<sction>
<div class="container">
<form>
  
  <div class="form-group">
    <label for="custid">Customization ID</label>
    <input type="text" class="form-control" id="custid" placeholder="">
  </div>

  <div class="form-group">
    <label for="name">Enter Name</label>
    <input type="text" class="form-control" id = "name" placeholder="Enter your name">
    <!--<select class="form-control" id="name">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select> -->
  </div>

  <div class="form-group">
    <label for="model_type">Model Type</label>
    <select class="form-control" id="model_type">
      
      <option>Z4 Roadster</option>
      <option>BMW i3</option>
      <option>ALPINA XB7</option>
      <option>3 Series Sedan</option>
      <option>8 Series Gran Coupe</option>
      <option>2 Series Convertible</option>
      <option>4 Series Convertible</option>
      <option>X3 Sports Coupe</option>
      <option>X1 Sports Activity</option>
      <option>X4 Sports Coupe</option>
      <option>X2 Sports Activity</option>
    </select>
    <!--<select multiple class="form-control" id="model_type">
      <option>Z4 Roadster</option>
      <option>BMW i3</option>
      <option>ALPINA XB7</option>
      <option>3 Series Sedan</option>
      <option>8 Series Gran Coupe</option>
      <option>2 Series Convertible</option>
      <option>4 Series Convertible</option>
      <option>X3 Sports Coupe</option>
      <option>X1 Sports Activity</option>
      <option>X4 Sports Coupe</option>
      <option>X2 Sports Activity</option>
   </select> -->
  </div>

  <div class="form-group">
    <label for="version">Version</label>
    <select class="form-control" id="version">
      
      <option>Standard Range</option>
      <option>Performance</option>
      <option>Premium</option>
      <option>Long Range</option>
      
    </select>
  </div>

  <div class="form-group">
    <label for="color">Choose color</label>
    <select class="form-control" id="color">
    
      <option>White</option>
      <option>Red</option>
      <option>Blue</option>
      <option>Black</option>
      <option>Silver</option>
      
    </select>
  </div>

  <div class="form-group">
    <label for="interior">Interior Type</label>
    <select class="form-control" id="interior">
     
      <option>Standard</option>
      <option>Premium</option>
      
    </select>
  </div>

  <div class="form-group">
    <label for="wheel_type">Wheel Type</label>
    <select class="form-control" id="Wheel_type">
      
      <option>Sport</option>
      <option>Aero</option>
      
    </select>
  </div>
 </form>
</div>



<div class="container text-center"> 
  <a href="#"><button type="button" class="btn btn-outline-primary">Make New Customizarion</button></a> 
  <a href="pay.php"><button type="button" class="btn btn-outline-success">Save Customizarion</button></a> 
  <a href="book.php"><button type="button" class="btn btn-outline-danger">Back</button>
 </div></a>  

</sction>

<br>
<br>
<footer class="py-4 bg-dark text-center">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; craft Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
