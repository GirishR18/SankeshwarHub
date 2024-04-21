<?php

require 'common.php';


if(isset($_POST['submit'])){

$name=$_POST['name'];
$name= mysqli_real_escape_string($con,$name);
$contact=$_POST['contact'];
$contact= mysqli_real_escape_string($con,$contact);
$message=$_POST['message'];
$message= mysqli_escape_string($con, $message);
$query="INSERT INTO contact (`name`, `contact`, `message`) VALUES ('$name', '$contact', '$message')";
mysqli_query($con,$query) or die(mysqli_errno($con));
header('location:index.php');
    
}

?>