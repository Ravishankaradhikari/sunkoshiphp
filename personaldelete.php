<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','sunkoshi');
$sql="DELETE FROM personal WHERE Personal_id=$id";
mysqli_query($con,$sql);
header('location:personaldata.php');
?>