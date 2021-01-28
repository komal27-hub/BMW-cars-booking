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
       <img src="logo.jpg"width = "40" height="40" class="d-inline-block align-top" alt='' loading = "lazy">BMW
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
            <a class="nav-link js-scroll-trigger" href="#history">History</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('slide1.jpg')">
        
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('slide2.jpg')">
       
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('slide3.jpg')">
        
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>

<section id="new_arrivals">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 mx-auto">
        	<div class="card" style="width: 550px;">
	  			<img src="card1.jpg" class="card-img-top" alt="...">
	  			<div class="card-body">
	  				<h4 class = "card-title">BMW X7</h4>
		    		<p class="card-text">Experience a Legend</p>
		    		<a href="#">Learn more</a>
				</div>
			</div>
		</div>

		<div class="col-lg-6 mx-auto">
        	<div class="card" style="width: 550px;">
	  			<img src="card2.jpg" class="card-img-top" alt="...">
	  			<div class="card-body">
	  				<h4 class="card-title">BMW X5</h4>
		    		<p class="card-text">Lead With Confidence</p>
		    		<a href="#">Learn More</a>
				</div>
			</div>
      	</div>
     
    </div>
    <br />
    <div class="row">

        <div class="col-lg-6 mx-auto">
        	<div class="card" style="width: 550px;">
	  			<img src="card3.jpg" class="card-img-top" alt="...">
	  			<div class="card-body">
	  				<h4 class = "card-title">BMW THE 5</h4>
		    		<p class="card-text">Experience a Legend</p>
		    		<a href="#">Learn more</a>
				</div>
			</div>
		</div>

		<div class="col-lg-6 mx-auto">
        	<div class="card" style="width: 550px;">
	  			<img src="card4.jpg" class="card-img-top" alt="...">
	  			<div class="card-body">
	  				<h4 class="card-title">BMW THE 8</h4>
		    		<p class="card-text">Power & Prestige</p>
		    		<a href="#">Learn More</a>
				</div>
			</div>
      	</div>
     
    </div>
   </div>
</section>


<section id="model" class="bg-light">
    <div class="container">
      <div class="row">
        <?php 
          $sql = "SELECT DISTINCT model_type, version, model_price, model_year FROM model LIMIT 10";
          $result = mysqli_query($conn, $sql);
        ?>
        <h3 align="text-center">MODELS</h3><br />
      <div class = "table-responsive">
      <table class="table table-striped">
        <tr>
          <th>Model_type</th>
          <th>Version</th>
          <th>Model_Price</th>
          <th>Model_Year</th>
        </tr>
        <?php
        if(mysqli_num_rows($result)>0)
        {
          while($row = mysqli_fetch_array($result))
          {
            ?>
            <tr>
              <td><?php echo $row['model_type'];?></td>
              <td><?php echo $row['version'];?></td>
              <td><?php echo $row['model_price'];?></td>
              <td><?php echo $row['model_year'];?></td>
            </tr>
            <?php
          }
        }
        ?>
      </table>
       </div>
    </div>
    <h4>To see all models click..</h4>
    <a href="#">more</a>
  </div>
  </section>

  <section id="book" class="bg-light">
    <div class="container">
      <div class="row">
      	  <div class="col">
      	  	<h4>To <a href="book.php">book</a> a car..</h4>
      	  </div>
      </div>
    </div>
  </section>

  <section id="history" class="bg-light">
    <div class="container">
      <div class="row">
        <?php 
          $sql = "SELECT cu.fname, cu.lname, cu.State, mo.model_type, o.order_date, mo.model_year
          FROM customer cu
          JOIN model mo 
          ON cu.customer_id = mo.customer_id
          JOIN orders o
          ON mo.customer_id = o.customer_id
          LIMIT 10";
          $result = mysqli_query($conn, $sql);
        ?>

        <h3 align="text-center">Customer Records</h3><br />
      <div class = "table-responsive">
      <table class="table table-striped">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>State</th>
          <th>Model Type</th>
          <th>Order Date</th>
          <th>Model Year</th>
        </tr>

        <?php
        if($result)
        if(mysqli_num_rows($result)>0)
        {
          while($row = mysqli_fetch_array($result))
          {
            ?>
            <tr>
              <td><?php echo $row['fname'];?></td>
              <td><?php echo $row['lname'];?></td>
              <td><?php echo $row['State'];?></td>
              <td><?php echo $row['model_type'];?></td>
              <td><?php echo $row['order_date'];?></td>
              <td><?php echo $row['model_year'];?></td>
              
            </tr>
            <?php
          }
        }
        ?>
      </table>
       </div>
    </div>
    
  </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mx-auto">
          <h2>How to contact us??</h2>
           <p class="lead">For further questions, feel free to contact us at...</p>
      </div>
      <div class="col-lg-6 mx-auto pt-5 ">

      <ul>
            <li>Number:000-000-0000</li>
            <li>email:abc@gmail.com</li>
            <li>Fax No: 000000</li>
            <li>Address: hsjaiamhdh</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
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
