<?php
session_start();
//if(isset($_COOKIE['username']))
//{
	//$_SESSION['Username'] = $_POST['username'];
	//header('location:Home.php');
	
//}//$msg="";

if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	//$mysqli=mysqli_connect("localhost","fuelosti_dash1","123456789","fuelosti_dash");
	$mysqli=mysqli_connect("localhost","root","","fuelosti_dash");
	
	$sql= mysqli_query($mysqli,"SELECT * from admin where Username = '$username' and Password = '$password'");
	$row=mysqli_fetch_array($sql);      
	if(is_array($row))
	{	 
		$_SESSION['Username'] = $_POST['username'];
		if(isset($_POST['remember']))
		{
			setcookie('username',$username,time()+60);
			setcookie('password',$password,time()+60);
		}else
		{
			setcookie('username',$username,30);
			setcookie('password',$password,30);
		}
		$_SESSION['IS_LOGIN']='yes';
		header('location:Home.php');
		die();
	}
	
}

$username_cookie='';
$password_cookie='';
$set_remember="";
if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
{
	$username_cookie=$_COOKIE['username'];
	$password_cookie=$_COOKIE['password'];
	$set_remember="checked='checked'";	
}
$_SESSION['check']=0;
?>

<!doctype html>
<html lang="en">
<head>

<!--DESIGNING-->
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form/css/util.css">
	<link rel="stylesheet" type="text/css" href="form/css/main.css">
<!--===============================================================================================-->


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
		background-size: cover;
    }
	
	
#ip2 {
    border-radius: 25px;
    border: 2px solid #609;
    padding: 20px; 
    width: 200px;
    height: 15px;    
}
    </style>
</head>
<div class="container" style="width:100%; height:100%;">
<body style="background-image: url('images/background.jpg');background-repeat: no-repeat;background-position:center;background-size: cover; ">    
 
    
<style>
p1:hover{
    color:#e0218a;
}
</style>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<div class="col-xl-6 container" style="margin-top:0.6in;">
		<form action="" method="POST">
		<center>
				 <a href="http://www.fuelostic.com/WEB_APP/dash-pro/login.php" style="margin-bottom:0.2in;"><img class="img-responsive" src="images/fuelostic.png" alt="logo" style="margin-bottom:0.2in;height:100px;width:200px;"></a>
					<div class="wrap-input100 validate-input ;" data-validate="Please enter email: ex@abc.xyz" style="width:80%;">
						<input class="input100" type="text" name="username" value="<?php echo $username_cookie?>" placeholder="Username" >
						<span class="focus-input100"></span>
					</div>
					<br>
					<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password" style="width:80%;">
						<span class="btn-show-pass">
							<i onclick="myFunction()" class="fa fa fa-eye"></i>
						</span>
						<input class="input100" id="myInput" type="password" name="password" value="<?php echo $password_cookie?>" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
				<table><th><input type="checkbox" name="remember" <?php echo $set_remember?> style="zoom:1.3;"  />  </th><th style="margin-bottom:0.1in;margin-left:0.2in;"><p1>&nbsp;Remember me </p1></th></table>
					<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" style="width:80%;">Sign in</button>
					
					<!--<a href="password.php" class="footer-link">Forgot Password?</a>-->
					
		</center>
		</form>
</div>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <!--<div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="index.html"><img class="logo-img" src="images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form action="login-logic.php" method="POST">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="Username" id="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="Password" id="password" type="password" placeholder="Password">
                    </div>                    
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="password.php" class="footer-link">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>-->
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<style>
.footer1 {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
}
</style>

<center>
  <p class="footer1">Designed By <img style="height:20px;width:20px;" src="images/iconicpages.png" /><a style="color:white;text-decoration: none;" href="https://www.iconicpages.com">Iconicpages</a></p>

</center>
	
</body>
</div>
 
</html>