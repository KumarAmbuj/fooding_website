<?php
include 'dbconnection.php';

$getid=$_REQUEST['id'];
echo $getid;
$n=$_POST['content'];
echo $n;

$ser="select * from bookissue where id='$getid'";
$resultser=mysqli_query($con,$ser);
$row=mysqli_fetch_array($resultser);

?>