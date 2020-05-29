<?php include('connection.php');
if(!empty($_GET['foodId']))
{
	$foodId=$_GET['foodId'];
	$delete_query_string="DELETE FROM cart WHERE foodId='$foodId'";
	$exec=mysqli_query($connect,$delete_query_string) or die(mysqli_error($connect));
	if($exec==1)
	{
		//header('location:index.php?delete=success');
		?><script> alert('Delete Success');window.location.href="cart.php";</script><?php
	}
}
?>