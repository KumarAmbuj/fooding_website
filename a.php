<?php
include 'dbconnection.php';
if($con)
    echo 'con su';
else
    echo 'con fu';
$r="INSERT INTO admin(id,setmobilenumber,setpassword,setname)values('','987','p','s')";
$e=mysqli_query($con,$r);
if($e)
echo 'success';
else
echo 'fail';
?>