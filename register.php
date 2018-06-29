<?php
	if(isset($_SESSION['firstname']))
	{
		session_unset();
		session_destroy();

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body style="padding: 5px;background-image: url(bg.jpg);background-size: cover;background-origin: content-box;">

	<div style="margin-top: 10px;">
		<div class="lead" style="font-size:30px;position: absolute;top: 20px;left: 35%;">
			Register
			</div>	
		<form method="POST" style="padding-top:60px;" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		  <div class="form-group">
		    <label >First Name</label>
		    <input type="text" name="firstname" required class="form-control"   placeholder="Enter First Name">
		  </div>
		  <div class="form-group">
		    <label >Last Name</label>
		    <input type="text" name="lastname" required  class="form-control"  aria-describedby="emailHelp" placeholder="Enter Last Name">
		  </div>

		  <div class="form-group">
		    <label>Email Address</label>
		    <input type="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
		  </div>

		  <div class="form-group">
		    <label >Mobile Number</label>
		    <input type="number" maxlength="10" class="form-control" name="mobile" placeholder="Enter Mobile Number">
		  </div>
		  <div class="form-group">
		    <label >Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="user_password" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label >Confirm Password</label>
		    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
		  </div>
		  <center>
		  <button type="submit" class="btn btn-primary">Submit</button><br>
		  Old User?
		  <a href="index.php">Back to Login</a>
		</center>
		</form>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>

<?php
if(isset($_POST['firstname']))
{	
  if($_POST['user_password']===$_POST['confirm_password'])
  {
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobile=$_POST['mobile'];
	$user_password=$_POST['user_password'];
	$user_id=uniqid();
	$email=$_POST['email'];
	//SERVER USERNAME AND PASSWORD
	$servername="localhost";
	$username="root";
	$password="";
	$database="abhidb";

	//Creating Connection
	$conn=mysqli_connect($servername,$username,$password,$database);
	//Checking Connection
	if(!$conn)
	{
		echo "<script>alert(Failed)</script>";
	}
	//Exaping backslashes
	$firstname=mysqli_real_escape_string($conn,$firstname);
	$lastname=mysqli_real_escape_string($conn,$lastname);
	$email=mysqli_real_escape_string($conn,$email);
	//Query to create new user
	//Check weather user exists
	$sql1="SELECT * FROM user_db WHERE email='".$email."' OR mobile='".$mobile."'";
	$query=mysqli_query($conn,$sql1);
	if(mysqli_num_rows($query)>0)
	{
		echo "<script>alert('User already exist')</script>";
	}
	else{
		$sql="INSERT INTO user_db(`firstname`, `lastname`, `mobile`, `email`, `password`, `user_id`)
		VALUES('".$firstname."','".$lastname."',".$mobile.",'".$email."','".$user_password."','".$user_id."')";
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('User has been Registered')</script>";
		}
		else{
			echo "<script>alert('Failed,creditenals are invalid!')</script>";	
			echo mysqli_error($conn);
		}
		
	}
	mysqli_close($conn);
  }
  else{
  	echo "PASSWORDS SHOULD BE SAME!!";
  	}
  }

?>