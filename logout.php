<?php
session_start();
unset($_SESSION['IS_LOGIN']);
unset($_COOKIE['username']);
unset($_COOKIE['password']);
header('location:http://fuelostic.com/WEB_APP/dash-pro/login.php');
die();
?>