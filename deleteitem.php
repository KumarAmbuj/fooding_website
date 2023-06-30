<?php
include 'dbconnection.php';
$getid=$_REQUEST['id'];
$del="delete from cart where id='$getid'";
$result=mysqli_query($con,$del);
if($result==true)
{
?>
<script>
alert("item deleted.   press ok then  refresh the page");
location.replace("cart.php");
</script>
<?php
}
?>