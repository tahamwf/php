<?php
require_once 'connections.php';
if(isset($_POST['select'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];



$sql="SELECT `id`, `name`, `email` FROM `records` WHERE `id`=$id";
if(mysqli_query($con,$sql)){
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($con); 
}
}    
?>
