<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','sunkoshi');
$sql="DELETE FROM industrial WHERE Indus_id=$id";
mysqli_query($con,$sql);
header('location:industrialdata.php');
?>