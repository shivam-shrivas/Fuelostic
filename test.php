<?php
session_start();
$_SESSION["nm"]=$_GET["nm"];
echo $_SESSION["nm"];
?>