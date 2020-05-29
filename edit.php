<?php include('connection.php'); 
if(!empty($_GET['foodId']))
{
	$foodId=$_GET['foodId'];
	$getPrevData=mysqli_query($connect, "SELECT * FROM food WHERE foodId='$foodId'");
	if(mysqli_num_rows($getPrevData)==1)
		$row=mysqli_fetch_array($getPrevData);
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Items</title>
</head>
<body>
	<p>INSERT HERE</p>
	<form method="post">
	<table>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" placeholder="Enter the food name..."></td>
		</tr>
		<tr>
			<td>Type:</td>
			<td><select name="type">
				<option value=" ">Select Type</option>
				<option>Deserts</option>
				<option>Non-Vegeterian</option>
				<option>Vegeterian</option>
				<option>Soft Drinks</option>
				<option>Classic</option>
				<option>Supreme</option>
			</select></td>
		</tr>
		<tr>
			<td>Size:</td>
			<td><select name="size">
				<option value=" ">Select Size</option>
				<option>Personal</option>
				<option>Medium</option>
				<option>Family</option>
			</select></td>
		</tr>
		<tr>
			<td>Quantity:</td>
			<td><input type="number" name="quantity"></td>
		</tr>
		<tr>
			<td>Price (₹):</td>
			<td><input type="text" name="price" placeholder="Enter the price..."></td>
		</tr>
		<tr>
			<td><input type="submit" name="ok" value="Submit"></td>
		</tr>
	</table>
</form>
<?php
if(isset($_POST['ok']))
{
	$name=$_POST['name'];
	$type=$_POST['type'];
	$size=$_POST['size'];
	$quantity=$_POST['quantity'];
	$price=$_POST['price'];
	$update_query_string=mysqli_query($connect,"UPDATE food SET Name='$name',Type='$type',Size='$size',Quantity='$quantity',Price='$price' WHERE foodId='$foodId'") or die(mysqli_error($connect));
	if($update_query_string==1)
	{
		?><script> alert('Update Success');window.location.href="add.php";</script><?php
	}
}
?>
</body>
</html>
