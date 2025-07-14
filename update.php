<?php
require_once 'connections.php';
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];



$sql="UPDATE `records` SET `id`='[$id]',`name`='[$name]',`email`='[$email]' WHERE `id`=$id";
if(mysqli_query($con,$sql)){
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($con); 
}
}
?>