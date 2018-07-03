<?php
	if(isset($_POST['name']))
	{
	session_start();
	$user_id=$_SESSION['user_id'];
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$number_of_adults=$_POST['number_of_adults'];
	$number_of_children=$_POST['number_of_children'];
	$pickup_location=$_POST['pickup_location'];
	$trip_destination=$_POST['trip_destination'];
	$travel_type=$_POST['travel_type'];
	$pickup_date=$_POST['pickup_date'];
	$return_date=$_POST['return_date'];
	$remarks=$_POST['remarks'];
	function date_formatting($date_old)
	{
		$date_new=date_create($date_old);
		return date_format($date_new,"d-m-Y");
	}
	$pickup_date=date_formatting($pickup_date);
	$return_date=date_formatting($return_date);

	//Setting up connection with database
	$servername="localhost";
	$username="root";
	$password="";
	$database="abhidb";
	$order_id=uniqid();
	$booking_date=date('d-m-Y');

	//Creating Connection
	$conn=mysqli_connect($servername,$username,$password,$database);
	//Checking Connection
	if(!$conn)
	{
		echo "failed";
	}

	$sql="INSERT INTO booking_db(`Name`, `mobile_number`, `number_of_adults`, `number_of_children`, `pickup_location`, `trip_destination`, `pickup_date`, `travel_type`, `return_date`, `order_id`, `booking_date`, `remarks`, `voucher`, `user_id`) VALUES('".$name."','".$mobile."','".$number_of_adults."','".$number_of_children."','".$pickup_location."','".$trip_destination."','".$pickup_date."','".$travel_type."','".$return_date."','".$order_id."','".$booking_date."','".$remarks."','No','".$user_id."')";

	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Booking Completed')</script>";
	}
	else{
		echo "<script>alert('Failed,creditenals are invalid!')</script>";
		echo mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<title>Booking Form</title>
</head>
<body style="padding: 0;margin: 0;background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)),url(img/bg.jpg);background-size: cover;color: white">
	<a href="homepage.php"><button style="position: absolute;top:5px;left: 2px">Menu</button></a>
	<center>
		<div class="lead" style="background-color:  #9E9E9E;height: 40px;padding-top: 6px;box-shadow: 0px 2px  lightgrey">
			<span style="font-weight: 500;color: white">Booking Form</span>
		</div>
	</center>
	<a href="index.php">
	<button style="position: absolute;top:5px;right: 2px">Logout</button></a>
	<div class="container lead" style="margin-top: 5%;font-weight: 500">
		<center>
			Submit Your Requirements
		</center>
	</div>
	<div style="margin-top: 5%;padding-bottom: 50px" class="container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <div class="form-group">
    <label>Name:</label>
    <input type="text" name="name" class="form-control" required placeholder="Enter Your Name">
  </div>
  <div class="form-group">
  	<label>Mobile Number:</label>
  	<input type="tel" class="form-control" name="mobile" required placeholder="Enter Your Phone Number">
  </div>
  <div class="form-group">
  		<label>Number Of Adults (Above 12+ Years):</label>
  		<input type="number" name="number_of_adults" required class="form-control">
  </div>
  <div class="form-group">
  	<label>Number Of Children(0 to 12 years):</label>
  	<input type="number" name="number_of_children" required class="form-control">
  </div>
  <div class="form-group">
  	<label>Pickup Location:</label>
  	<input type='text' class="form-control" name="pickup_location">
  </div>
  <div class="form-group">
  	<label>Trip Destination:</label>
  	<input type="text"  name="trip_destination" class="form-control">
  </div>
  <div class="form-group">
  	<label>Travel Type: Bus/Air Travel/Cab etc.</label>
  	<select class="form-control" name="travel_type">
  		<option>Air</option>
  		<option>Bus</option>
  		<option>Train</option>
  		<option>Cab</option>
  	</select>
  </div>
  <div class="form-group">
  	<label>Pickup Date</label>
  	<input type="date" name="pickup_date" class="form-control">
  </div>
  <div class="form-group">
  	<label>Return Date</label>
  	<input type="date" name="return_date" class="form-control">
  </div>
  <div class="form-group">
  	<label>Remarks</label>
  	<textarea class="form-control" name="remarks"></textarea>
  </div>
  <div class="form-group">
  	<input onclick="make_submit()" type="Checkbox" name="term_check" required> Accept Terms and Conditions
  </div>
  <center>
  <input id="submit_btn" disabled style="width: 100%" type="Submit" name="submit" class="btn btn-primary">
	</center>
  </form>
</div><!--
	<div style="padding-top: 10px;position: absolute;background-color:#2F4F4F;width:100%;height: 20%;left: 0;color: white;font-weight: 400;">
		<center>
			&#169; Copyright Shree Global 
		</center>
	</div>-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	function make_submit()
    	{
    		var submit_btn=document.getElementById('submit_btn');
    		if(submit_btn.disabled==false)
    		{
    			submit_btn.disabled=true;
    		}
    		else{
    			submit_btn.disabled=false;
    		}
    	}
    </script>
</body>
</html>

