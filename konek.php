<?php
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$dbname = "project"; 

$conn = mysqli_connect($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>