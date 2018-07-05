<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title>User Database</title>
</head>
<body>
<body>
	<div style="background-color:lightgrey;height: 40px;font-size: 30px; "><center>ABHI</center></div>
  <div style='margin-top: 10px'><center>
    <a href="database.php">Click here to go to booking form page</a></center>
  </div>
	<div style="margin-top: 100px;">
	<table class="table">
  <thead>
  
    <tr>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">user_id</th>
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

  	$sql="SELECT * from user_db";
  	$result=mysqli_query($conn,$sql);

  	if(mysqli_num_rows($result)>0)
  	{
  		while($row=mysqli_fetch_assoc($result))
  		{
  			echo "<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['mobile']."</td><td>".$row['email']."</td><td>".$row['password']."</td><td>".$row['user_id']."</td></tr>";
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