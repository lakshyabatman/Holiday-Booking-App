<?php
	if(isset($_SESSION['firstname']))
	{
		session_unset();
		session_destroy();
		echo "<script>alert('You have successfully logged out')</script>";
	}
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login here</title>


	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="padding: 5px;background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(img/bg.jpg);background-size: cover;">
	<div style="margin-top: 10px;">
		<div class="lead" style="font-size:30px;position: absolute;top: 20px;left: 30%;">
			<span style="font-weight: 500;color: white">Login Here</span>
			</div>	
	<form style="padding-top: 100px;" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <center>
  <button type="submit" class="btn btn-primary">Submit</button><br><br>
    <button type="submit" class="btn btn-danger">Forget Password</button>
</center><br>
</form>
	<p>NEW USER?
	<a href="register.php">REGISTER HERE</a></p>
	</div>

	<div style="padding-top: 10px;position: absolute;top:80%;background-color:#2F4F4F ;width:100%;height: 20%;left: 0;color: white;font-weight: 400">
		<center>
			Copyright Shree Global 
		</center>
	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>

<?php 
	if(isset($_POST['email']) and isset($_POST['password']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];

		$email=htmlspecialchars($email);
		$password=htmlspecialchars($password);
		$email=trim($email);
		$password=trim($password);

		$conn=mysqli_connect("localhost","root","","abhidb");
		if($conn)
		{
			$result=mysqli_query($conn,"select * from user_db where email='$email' and password='$password'") or die("SERVER FAILEDD".mysqli_err());
			$row=mysqli_fetch_array($result);
			if(($row['email']===$email) and $row['password']===$password)
			{
				$_SESSION['firstname']=$row['firstname'];
				$_SESSION['user_id']=$row['user_id'];
				echo "<script>window.location='homepage.php'</script>";

			}
			else{
				echo "<script>alert('FAILED TO LOGIN')</script>";
				echo mysqli_error($conn);
			}

		}
	}

?>