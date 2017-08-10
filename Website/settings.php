<?php

header('Access-Control-Allow-Origin: *');

$server = "localhost";
$username = "root";
$password = "";
$database = "tracking_system";

$con = mysqli_connect($server,$username,$password,$database);

?>