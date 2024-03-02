<?php
$id=$_GET['id'];
$con=mysqli_connect('localhost','root','','sunkoshi');
$sql="DELETE FROM organizational WHERE Org_id=$id";
mysqli_query($con,$sql);
header('location:organizationaldata.php');
?>