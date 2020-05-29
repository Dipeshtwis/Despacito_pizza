<?php include('connection.php');

	if(isset($_POST['submit']))
	{
$EmailId=$_POST['em'];
$query="SELECT * FROM userprofile WHERE EmailId='$EmailId'";
$exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
 if(mysqli_num_rows($exec)==1){
			$new=$_POST['new'];
			$cfnew=$_POST['cnew'];
			if($new!=$cfnew)
				echo "<p style='color:red' align='center'><font size='4'>**New Password is not matching</font></p>";
			else
			{
				$update_query_string=mysqli_query($connect,"UPDATE userprofile SET Password='$new' WHERE EmailId='$EmailId'") or die(mysqli_error($connect));
				if($update_query_string==1){
					?><script>alert('Updated');window.location.href="login.php";</script><?php				
				}
			}
		}
	}
		?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forgot Password</title>


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
  border-radius: 6px;
  height: 335px;
  margin: 20px auto 0;
  width: 298px;
}
.login h1 {
  background-image: linear-gradient(top, #f1f3f3, #d4dae0);
  border-bottom: 1px solid #a6abaf;
  border-radius: 6px 6px 0 0;
  box-sizing: border-box;
  color: #727678;
  display: block;
  height: 43px;
  font: 600 14px/1 'Open Sans', sans-serif;
  padding-top: 14px;
  margin: 0;
  text-align: center;
  text-shadow: 0 -1px 0 rgba(0,0,0,0.2), 0 1px 0 #fff;
}
input[type="password"], input[type="text"] {
  border: 1px solid #a1a3a3;
  border-radius: 4px;
  box-shadow: 0 1px #fff;
  box-sizing: border-box;
  color: #696969;
  height: 39px;
  margin: 31px 0 0 29px;
  padding-left: 37px;
  transition: box-shadow 0.3s;
  width: 240px;
}
input[type="password"]:focus, input[type="text"]:focus {
  box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
  outline: 0;
}
.toggle {
  display: block;
  height: 16px;
  margin-top: -20px;
  width: 87px;
  z-index: -1;
}
input[type="submit"] {
  width:240px;
  height:35px;
  display:block;
  font-family:Arial, "Helvetica", sans-serif;
  font-size:16px;
  font-weight:bold;
  color:#fff;
  text-decoration:none;
  text-transform:uppercase;
  text-align:center;
  text-shadow:1px 1px 0px #37a69b;
  padding-top:6px;
  margin: 29px 0 0 29px;
  position:relative;
  cursor:pointer;
  border: none;  
  background-color: #37a69b;
  background-image: linear-gradient(top,#3db0a6,#3111);
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius:5px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #497a78, 0px 10px 5px #999;
}

.shadow {
  background: #000;
  border-radius: 12px 12px 4px 4px;
  box-shadow: 0 0 20px 10px #000;
  height: 12px;
  margin: 30px auto;
  opacity: 0.2;
  width: 270px;
}


input[type="submit"]:active {
  top:3px;
  box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #31524d, 0px 5px 3px #999;
}	ul{
			float:left;
			line-height:35px;
			background-color:grey;
			border-top:solid 1px black;
			border-bottom:solid 1px black;
			border-left:solid 1px black;
			margin-left:45.5%;
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
	</style>




</head>
<body>
	<h1><ul>
		<li><a href="login.php"><font color="white" face="Agency FB">CANCEL</font></a></li>
	</ul></h1>
	<div id='clear'>
	</div>
	<div class="login">
	<form method="post">
		<table>
			<tr>
				<td><input type="text" name="em" required placeholder="Type your Email" id="username"></td>
			</tr>
			<tr>
				<td><input type="password" name="new" required placeholder="New Password" id="password"></td>
			</tr>
			<tr>
				<td><input type="password" name="cnew" required placeholder="Confirm your Password" id="password"></td>
			</tr>
			<tr>
				<td align="center" colspan="4"><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</div>
</div>
<div class="shadow"></div>
</body>
</html>