<?php include('connection.php');
	$delete_query_string="DELETE FROM cart";
	$exec=mysqli_query($connect,$delete_query_string) or die(mysqli_error($connect));
?>
<html>
<head>
    <meta http-equiv="refresh" content="3;url=http://localhost/Pizza/final.php" />
</head>
<body>
    <h1>You Payment is Proceessing...</h1>
    <h5>Please donot refresh the page</h5>
</body>
</html>