<?php include('connection.php'); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Card</title>
</head>
<body>
	<h1>Menu</h1>
</body>
</html>
<?php 
$query="SELECT * FROM food";
	$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
	if(mysqli_num_rows($exec)>0)
	{
		?>
		<table align="center" cellpadding="5" border="2" cellspacing="0" border="1" style="background-color:#f2f2f2;border-radius:4px">
			<thead>
				<tr>
					<th>SL.NO</th>
					<th>SELECT</th>
					<th>NAME</th>
					<th>FOOD ID</th>
					<th>TYPE</th>
					<th>SIZE</th>
					<th>QUANTITY</th>
					<th>PRICE</th>
					<th>ADD TO CART</th>
				</tr>
			</thead>
			<tbody>
			<?php $sl=1;
			while($each=mysqli_fetch_array($exec))
			{
				?>
				<tr>
					<td align="center"><?php echo "$sl."?></td>
					<td align="center"><input type="checkbox" name="check[]" value="check"></td>
					<td><?php echo $each['Name']?></td>
					<td><?php echo $each['Unique']?></td>
					<td><?php echo $each['Type']?></td>
					<td><?php echo $each['Size']?></td>
					<td><input type="number" name="value"></td>
					<td><?php echo $each['Price']?></td>
					<td align="center"><a href="cart.php?foodId=<?php echo $each['foodId']?>" onClick="return confirm('Are you sure you want to add to cart')">Add to Cart</a></td>
				</tr>
				<?php $sl++;
			}?>
		</tbody>
	</table>
	<?php
	}
	else
		echo "<p style='color:red' align='center'><font size='4'><b>***No Data Found</b></font></p>";
	?>