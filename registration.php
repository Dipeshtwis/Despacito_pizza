<?php include('connection.php');
if(!empty($_POST['Userid']))
	{
		$Userid = $_POST['Userid'];
		$query = "SELECT * FROM userprofile WHERE Userid=$Userid";
		$fire = mysqli_query($connect,$query) or die(mysqli_error($connect));
		$user = mysqli_fetch_array($fire);
	}
    if(isset($_POST['ok']))
    {
    	$em= $_POST['em'];
        $cnfem= $_POST['cnfem'];
		$pwd = $_POST['pwd'];
        $cnfpwd = $_POST['cnfpwd'];
        if($pwd!=$cnfpwd || $em!=$cnfem)
        {?>
            <script type="text/javascript">alert("confirm password or email is not matching")</script>
        <?php }
        else
        {
        	$fname=$_POST['fname'];
			$sname=$_POST['sname'];
			$dob=$_POST['dob'];
			$email=$_POST['em'];
			$state=$_POST['state'];
			$pass=$_POST['pwd'];
			$city=$_POST['city'];
			$phone=$_POST['phone'];
			$pin=$_POST['pin'];
			$gender=$_POST['gender'];
			$street=$_POST['street'];
			$loc=$_POST['loc'];
			$query="SELECT * FROM userprofile WHERE EmailId='$email'";  //query to check email is already exists
			$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
			if(mysqli_num_rows($exec)==1)  //check if any rows found
				echo "<p style='color:red' align='center'><font size='4'><b>***Email Already Exists</b></font></p>";
			else
			{
				$query_string="INSERT INTO userprofile VALUES('0','$fname','$sname','$dob','$gender','$street','$loc','$city','$state','$pin','$phone','$email','$pass')";
				$exec =mysqli_query($connect,$query_string) or die(mysqli_error($connect));
				if($exec==1)
					return 1
			}
		}

    }?>
<!doctype html>
<html>
<head>
	<title>Register Your Account</title>
<style type="text/css">
body{
		background-image:url("pizza00.jpg");
	}
html { height: 100% }
::-moz-selection { background: #fe57a1; color: #fff; text-shadow: none; }
::selection { background: #fe57a1; color: #fff; text-shadow: none; }
.login {
  background: #eceeee;
  border: 1px solid #42464b;
  height: 415px;
  margin: 10px auto 0;
  width: 530px;
}

div::after {
  		content: "";
  		background: url("pizza00.jpg");
  		opacity: 0.7;
  		top: 0;
  		left: 0;
  		bottom: 0;
  		right: 0;
  		position: absolute;
  		z-index: -1;   
	}
	ul{
			float:left;
			line-height:35px;
			background-color:grey;
			border-top:solid 1px black;
			border-bottom:solid 1px black;
			border-left:solid 1px black;
			margin-left:43.3%;
			padding:0;
	}
	li{
		float:left;
		list-style: none;
		cursor: pointer;
		display:block;
		border-right:1px solid #262626;
	}
	li:hover{
		background-color:#b30000;
	}
	li a{
		text-decoration:none;
		text-align:center;
		padding: 14px 16px;
		color:white;
	}
	#clear{
		clear:both;
	}
	input[type=text] {
    
    padding: 5px 10px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 11px 0 0;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=number] {
    
    padding: 5px 10px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 5px 0 0;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=email] {
    
    padding: 5px 10px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 5px 0 0;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=password] {
    
    padding: 5px 10px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 5px 0 0;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=date] {
    
    padding: 5px 10px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 5px 0 0;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
select {
    
    padding: 3px 10px;
    border: 1px solid #a1a3a3;
    border-radius: 4px;
    background-color: #f1f1f1;
    transition: box-shadow 0.3s;
  width: 240px;
  margin: 5px 0 0;
  box-shadow: 0 1px #fff;
}
input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 4px 10px;
    text-decoration: none;
    cursor: pointer;
  	height:35px;
  	margin-top:10px;
}

</style>
</head>
<body>
	<p align="center"><img src="icon.png" width="190px" height="180px"></p>
	<ul>
		<li><a href="login.php"><font color="white" face="Agency FB">Login</font></a></li>
		<li><a href="registration.php"><font color="white" face="Agency FB">Register</font></a></li>
		<li><a href="index.php"><font color="white">Back</font></a></li>
	</ul>
	<div id='clear'>
	</div>
	<p align="center"><b><font size="6" color="grey" face="Agency FB">Delicious Account</font></b></p>
	<div class="login">
		<form method="post">
			<table align="center" cellpadding="6">
			<tr>
				<td><input type="text" name="fname" placeholder="First name*" required></td>
				<td><input type="text" name="sname" placeholder="Second name"></td>
			</tr>
			<tr>
				<td><input type="date" name="dob"></td>
				<td><select name="gender"> 
					<option value=''>Select Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Transgender</option>
					</select>
				</td>
			</tr>	
			<tr>
				<td><input type="text" name="street" required placeholder="Street" ></td>
				<td><input type="text" name="loc" placeholder="Location" required></td>
			</tr>
	<tr>
	
		<td><select name="state" required> 
		<option value=''>Select State</option>
		<option>Bihar</option>
		<option>Delhi NCR</option>
		<option>Karnataka</option>
		<option>Maharastra</option>
		<option>West Bengal</option>		
		</select>
		</td>
		<td><select name="city" required> 
		<option value=''>Select City</option>
		<option>Patna</option>
		<option>Kolkata</option>
		<option>Delhi</option>
		<option>Bengaluru</option>
		<option>Mumbai</option>		
		</select>
		</td>
	</tr>
     <tr>	
		<td><input type="number" name="pin" maxlength="10" placeholder="Pincode" required title="Enter 10 Digit of your Mobile Number"></td>
		<td><input type="number" name="phone" placeholder="Phone number*" required></td>
	</tr>
	<tr>
		<td><input type="email" name="em" placeholder="Your email address*" required></td>
		<td><input type="email" name="cnfem" placeholder="Confirm email*"></td>
	</tr>		
	<tr>
		<td><input type="Password" name="pwd" placeholder="Password*" pattern=".{5,12}" minlength="6" required title="Password should be 5 to 12 characters"></td>
		<td><input type="Password" name="cnfpwd" placeholder="Confirm Password*"></td>
	</tr>
	<tr>
		<td align="center" colspan="8"><a href="registration.php" style="text-decoration:none"><input type='submit' name='ok' value='Register'></a>
			<input type='reset'></td>
	</tr>
		</table>
	</form>
</div>
</body>
</html>