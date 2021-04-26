<?php
session_start();
//$mysqli=mysqli_connect("localhost","fuelosti_dash1","123456789","fuelosti_dash");
$mysqli=mysqli_connect("localhost","root","","fuelosti_dash");
if(mysqli_connect_errno())
{
	echo"ERROR CONNECTING DATABASE!"+connect_error();
}
else
{
	$Username = $_POST['username'];
	$_SESSION['Username'] = $Username;
	$Password = $_POST['password'];
	//echo"DATABASE SUCCESSFULLY CONNECTED!";
	$sql= mysqli_query($mysqli,"SELECT * from admin where Username = '$Username' and Password = '$Password'");
	$row=mysqli_fetch_array($sql);      
	if(is_array($row))
	{
	    header("Location: http://localhost/dash-pro-server/dash-pro/Home.php");
	}
	else
	{
		header("Location: http://localhost/dash-pro-server/dash-pro/login.php");	
	}
}
?>
