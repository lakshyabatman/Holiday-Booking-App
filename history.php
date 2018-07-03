
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <style type="text/css">
    </style>
	<title>History</title>
</head>
<body style="padding: 0;margin: 0;background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/bg.jpg);">
		<a href="homepage.php"><button style="position: absolute;top:5px;left: 2px">Menu</button></a>
	<center>
		<div class="lead" style="background-color:#9E9E9E;height: 40px;padding-top: 6px;box-shadow: 0px 2px  lightgrey">
			<span style="font-weight: 500;color: white">HISTORY</span>
		</div>
	</center>
	<center>
	<div style="margin-top: 10%;color: red;display: none" id="notice">
		<b>Voucher will be send to your email in 24 hours</b>
	</div>
	</center>
	<div style="margin-top: 20%" style="width: 100%">
	<?php
		session_start();
		$user_id= $_SESSION['user_id']; 
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="abhidb";
		//Setting up connection
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn)
		{
			echo "Connection not working";
		}
		//SQL Query
		$sql="SELECT * from booking_db where user_id='".$user_id."'";
		$result=mysqli_query($conn,$sql);
		echo mysqli_error($conn);
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
   		 while($row = mysqli_fetch_assoc($result)) {

   		 	$booking_date=$row['booking_date'];
   		 	$order_no=$row['order_id'];
   		 	$pickup_date=$row['pickup_date'];
        	echo '<div  style="width: 95%;margin-left: 10px;margin-right: 10px;margin-bottom:10px">
		<div class="card" style="width: 100%;box-shadow: 0px 3px 1px grey">
		  <ul class="list-group list-group-flush">
		    <li style="height: 70px" class="list-group-item"><b>Booking Date:'.$booking_date.'</b></li>
		    <li style="height: 70px;color:black" class="list-group-item"><b>Order Number:'.$order_no.'</b></li>
		   	<li style="height: 70px" class="list-group-item"><b>Journey Date:'.$pickup_date.'</b></li>
		    <li style="height: 70px" class="list-group-item"><b>Package: '.$row['travel_type'].'</b></li>';
		    if($row['voucher']=='No'){
		     echo '<a href="#" id="mylink" onclick="display()"><li style="height: 70px" class="list-group-item" id="voucher">Click Here to generate Voucher.</li></a>';

				}
				else{
					echo'<li style="height: 70px" class="list-group-item">Your Voucher Has Been Already Created</li>';
				}
			echo  '</ul>
				</div>
					</div>';}
    			}
		 else {
   				 echo "<center style='margin-bottom:110%'><b>0 results</b></center>";
				}

	?>
	<div style="padding-top: 10px;position: absolute  ;buttom:0;background-color:#2F4F4F ;width:100%;height: 20%;left: 0;color: white;font-weight: 400;margin-top: 60px;">
		<center>
			   &#169; Copyright Shree Global 
		</center>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	function display()
    	{
    		var notice=document.getElementById('notice');
    		notice.style.display="block";
    	}
    </script>
</body>
</html>