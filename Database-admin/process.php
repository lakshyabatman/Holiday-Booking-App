<?php
if(isset($_GET['order_id']))
{
	$order_id=$_GET['order_id'];	
	$servername="localhost";
	$username="root";
	$password="";
	$database="abhidb";
	$conn=mysqli_connect($servername,$username,$password,$database);

	if(!$conn)
	{
		echo "<script>alert(Failed)</script>";
	}
	$order_no=mysqli_real_escape_string($conn,$order_id);
	$sql="UPDATE booking_db SET Voucher='Yes' WHERE order_id='".$order_id."'";
	if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Updated Voucher Details')</script>";
			echo"<center><a href='database.php'>Click here to go back</a></center><br><hr>";
		}
		else{
			echo "<script>alert('Failed,to update Voucher Details')</script>";	
			echo mysqli_error($conn);
		}
	mysqli_close($conn);	
}
?>