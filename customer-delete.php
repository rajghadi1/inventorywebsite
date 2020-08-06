<?php
$con=mysqli_connect("localhost","root","","inventory")or die(mysqli_error());
$id=$_GET['id'];
mysqli_query($con,"DELETE FROM customer WHERE id=$id");
header("location:customer.php");
?>