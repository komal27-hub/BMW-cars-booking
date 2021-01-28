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
<br>
<br>
<sction>
<div class="container">
<form>
  <div class="form-group">
    <label for="payment_type">Payment Type</label>
    <select class="form-control" id="payment_type">
      
      <option>Loan</option>
      <option>Credit</option>
      <option>Cash</option>
    </select>
  </div>

  <div class="form-group">
    <label for="bprice">Billing Price</label>
    <input type="text" class="form-control" id="bprice" placeholder="" value="$800000">
  </div>
 
 </form>
</div>
<div class="container text-center"> 
  <button type="button" class="btn btn-outline-primary">Confirm Payment</button>
  <button type="button" class="btn btn-outline-success">Make Payment</button>
  <a href="book.php"><button type="button" class="btn btn-outline-danger">Back</button>
 </div></a>  
</sction>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
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
