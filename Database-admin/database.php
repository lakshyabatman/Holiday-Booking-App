<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<title>Database</title>

</head>
<body>
	<div style="background-color:lightgrey;height: 40px;font-size: 30px; "><center>ABHI</center></div>
        <div style='margin-top: 10px'><center>
    <a href="user_db.php">Click here to go to User Database page</a></center>
	<div style="margin-top: 100px;">
	<table class="table">
  <thead>
  	<tr>
  		<th></th>
  		<th colspan="3">Customer Contact Details</th>
  		<th colspan="3">Booking Details</th>
  		<th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
  	</tr>  
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Number of Adult</th>
      <th scope="col">Number of Child</th>
      <th scope="col">Pickup Location</th>
      <th scope="col">Trip Destination</th>
      <th scope="col">Pickup Date</th>
      <th scope="col">Travel Type</th>
      <th scope="col">Return Date</th>
      <th scope="col">Order No</th>
      <th scope="col">Booking Date</th>
      <th scope="col">Remarks</th>
      <th scope="col">USER ID</th>
      <th scope="col">Voucher</th>
      <th scope="col">Click if Voucher is generated</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$servername="localhost";
  	$username="root";
  	$password="";
  	$dbname="abhidb";

  	$conn=mysqli_connect($servername, $username, $password, $dbname);

  	if(!$conn)
  	{
  		die("Failed");
  	}

  	$sql="SELECT * from booking_db";
  	$result=mysqli_query($conn,$sql);

  	if(mysqli_num_rows($result)>0)
  	{
  		while($row=mysqli_fetch_assoc($result))
  		{ 
        $name=$row['Name'];
        $Mobile_Number=$row['mobile_number'];
        $Number_Of_Adults=$row['number_of_adults'];
        $Number_Of_Child=$row['number_of_children'];
        $Pickup_Location=$row['pickup_location'];
        $Trip_Destination=$row['trip_destination'];
        $Pickup_Date=$row['pickup_date'];
        $travel_type=$row['travel_type'];
        $Return_date=$row['return_date'];
        $order_id=$row['order_id'];
        $Booking_Date=$row['booking_date'];
        $Remarks=$row["remarks"];
        $Voucher=$row['voucher'];
        $user_id=$row['user_id'];
        $form="
        <form method='GET' action='process.php'>
          <input type='text' name='order_id' hidden value='".$order_id."'><input type='Submit' value='Click Here'></form>";
  			echo "<tr><td>".$name."</td><td>".$Mobile_Number."</td><td>".$Number_Of_Adults."</td><td>".$Number_Of_Child."</td><td>".$Pickup_Location."</td><td>".$Trip_Destination."</td><td>".$Pickup_Date."</td><td>".$travel_type."</td><td>".$Return_date."</td><td>".$order_id."</td><td>".$Booking_Date."</td><td>".$Remarks."</td><td>".$user_id."</td><td style='color:red'>".$Voucher."</td><td>".$form."</td></tr>";
  		}
  	}



  	?>
  </tbody>
	</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>