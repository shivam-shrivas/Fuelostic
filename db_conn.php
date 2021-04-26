<?php 
//$conn=mysqli_connect("localhost","fuelosti_dash1","123456789","fuelosti_dash");
$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "fuelosti_dash";
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}