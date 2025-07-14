<?php
require_once 'connections.php';
if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];



$sql="DELETE FROM `records` WHERE `id`=$id";
if(mysqli_query($con,$sql)){
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($con); 
}
}    
?>
