<?php
$user="root";
$pass="";
$database="records";
$host="localhost";


$con=mysqli_connect($host,$user,$pass,$database);

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}
?>
