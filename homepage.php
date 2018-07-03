<?php
	session_start();
	if(!isset($_SESSION['firstname']))
	{
		echo "<script>window.location='login.php'</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<title>HomePage</title>
	<style type="text/css">
	</style>
</head>
<body style="padding: 0;margin: 0;background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/bg.jpg);background-size: cover;background-position: top;background-repeat: no-repeat;">
	<a href="index.php"><button style="position: absolute;top:5px;left: 2px">Logout</button></a>
	<center>
		<div class="lead" style="background-color: #9E9E9E;height: 40px;padding-top: 6px;box-shadow: 0px 2px  lightgrey">
			<span style="font-weight: 500;color: white">WELCOME</span>
		</div>
	</center>
	<button style="position:absolute;top:6px;right: 2px">Share</button>
	<div style="box-shadow: 0px 3px 6px grey;margin-top: 2px">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/new2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/new3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/new5.jpg" alt="Third slide">
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
	</div>
	<div  style="margin-top: 50px;width: 95%;margin-left: 10px;margin-right: 10px;">
		<div class="card" style="border-radius: 5px;border: solid white;width: 100%;box-shadow: 0px 3px 1px grey">
		  <ul class="list-group list-group-flush">
		    <a href="booking_form.php" style="color: black"><li style="height: 70px" class="list-group-item"><i class="fa fa-file-text-o" style="font-size:24px"></i> Your Requirements</li></a>
		    <a href="history.php" style="color: black"><li style="height: 70px;color:black" class="list-group-item"><i class="fa fa-file-text-o" style="font-size:24px;"></i> Booking History</li></a>
		    <a href="payment.php" style="color: black"><li style="height: 70px" class="list-group-item"><i class="fa fa-file-text-o" style="font-size:24px"></i> Payment Info</li></a>
		  </ul>
		</div>
	</div>
	<div style="padding-top: 10px;position: absolute;background-color:#2F4F4F;width:100%;height: 25%;left: 0;margin-top: 40px;color: white;font-weight: 400">
		<center>
			&#169; Copyright Shree Global 
		</center>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
