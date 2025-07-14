<?php
require_once 'connections.php';
if(isset($_POST['submit'])){
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];


$sql="INSERT INTO `records` (`id`, `name`, `email`) VALUES ($id,'$name','$email');";
if(mysqli_query($con,$sql)){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>
