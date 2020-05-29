<?php include('connection.php');
if(!empty($_GET['StoreId']))
{
	$StoreId=$_GET['StoreId'];
	$delete_query_string="DELETE FROM store WHERE StoreId='$StoreId'";
	$exec=mysqli_query($connect,$delete_query_string) or die(mysqli_error($connect));
	if($exec==1)
	{
		//header('location:index.php?delete=success');
		?><script> alert('Delete Success');window.location.href="store.php";</script><?php
	}
}
?>