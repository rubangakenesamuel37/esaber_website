<?php

// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
$hostname="localhost";
$username="root";
$password="";
$database="isaber";

$conn = mysqli_connect($hostname, $username, $password, $database);   
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}  else {
    echo "Connected successfully";
}

?>