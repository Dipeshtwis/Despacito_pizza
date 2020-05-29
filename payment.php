 <?php include('connection.php');
if(!isset($_SESSION['user']))
{
  header('location:index.php');
  exit;
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Payment</title>
<style>
html, body {
        margin: 0;
        padding: 0; 
  }
  #div0{
    background-color:#1b7fbd;
    height:83px;
    padding-top:2px;
  }
#left{
  float:left;
}
#left1{
  padding-top:20px;
  float:left;
  margin-left:50px;
  width: 70%;
}
ul {
    list-style-type: none;
    margin-top:13px;
    padding: 0;
    width: 200px;
    background-color:white;
    margin-top: 32px;
    border-top:1px solid #262626;    
    border-right: 1px solid #262626;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
    border-right:1px solid #262626;
}
li a:hover {
    background-color: #555;
    color: white;
}
input[type=submit] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 8px 32px;
    text-decoration: none;
    cursor: pointer;
    height:35px;
    margin-top:40px;
    text-align: center;
    font-size: 14px;
}
input[type=text] {
    padding: 5px;
    transition: box-shadow 0.3s; 
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=number] {
    
    padding: 5px;
    transition: box-shadow 0.3s; 
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=email] {
    
    padding: 5px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;  
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
input[type=password] {
    
    padding: 5px;
    box-sizing: border-box;
    transition: box-shadow 0.3s;
  border: 1px solid #a1a3a3;
  box-shadow: 0 1px #fff;
}
select {
    padding: 3px;
    border: 1px solid #a1a3a3;
    border-radius: 4px;
    background-color: #f1f1f1;
    transition: box-shadow 0.3s;
  box-shadow: 0 1px #fff;
}
</style>
</head>
<body>
  <div id="div0">
  <h1 style="margin-left:20px"><font face="Agency FB">Payment Page</font></h1><hr>
</div>
  <div id="left">
<ul>
  <li><a href="payment.php">Credit Card</a></li>
  <li style="background-color:#b9191c"><a href="payment.php"><font color="white">Debit Card</font></a></li>
  <li><a href="payment.php">Net Banking</a></li>
  <li><a href="payment.php">Wallets</a></li>
  <li><a href="payment.php">Paypal</a></li>
  <li><a href="payment.php">UPI</a></li>
  <li><a href="payment.php">Installments</a></li>
  <li><a href="payment.php">Cash on Delivery</a></li>
</ul>
</div>
<div id="left1">
<form method="post">
  <table cellpadding="2">
    <tr>
      <td><font size="6" color="red">Order ID:<hr></font></td>
    </tr>
    <tr>
      <td>Discount code</td>
      <td><input type="text" name="discount"><input type="submit" name="okay" value="Apply"></td>
    </tr>
    <tr>
      <td><font size="6" color="red">Account Information</font><hr></td>
    </tr>
    <tr>
      <td>Card Type</td>
      <td><input type="radio" name="type" value="Visa" required>
        <img src="visa.png" width="30px" height="30px"/>
        <input type="radio" name="type" value="MasterCard" required>
        <img src="master.png" height="30px" width="30px"/>
        <input type="radio" name="type" value="Rupay" required>
        <img src="rupay.jpg" height="30px" width="30px"/>
        <input type="radio" name="type" value="MaestroCard" required>
        <img src="maestro.png" height="30px" width="30px"/>
        <input type="radio" name="type" value="UnionPay" required>
        <img src="union.png" height="30px" width="30px"/>
      </td>
    </tr>
    <tr>
      <td>Card Number</td>
      <td><input type="text" name="number" maxlength="4" required>-<input type="text" name="number" maxlength="4" required>-<input type="text" name="number" maxlength="4" required>-<input type="text" name="number" maxlength="4" required></td>
    </tr>
    <tr>
      <td>Expiration Date</td>
      <td><select name="day" required>
          <option value=' '>DD</option>
          <option>01</option>
          <option>02</option>
          <option>03</option>
          <option>04</option>
          <option>05</option>
          <option>07</option>
          <option>08</option>
          <option>09</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
          </select>-
          <select name="month" required>
            <option value=" ">MM</option>
            <option>Jan</option>
          <option>Feb</option>
          <option>Mar</option>
          <option>Apr</option>
          <option>May</option>
          <option>June</option>
          <option>July</option>
          <option>Aug</option>
          <option>Sep</option>
          <option>Oct</option>
          <option>Nov</option>
          <option>Dec</option>
          </select>-
          <select name="year" required>
            <option value=" ">YYYY</option>
            <option>25</option>
          <option>2026</option>
          <option>2027</option>
          <option>2028</option>
          <option>2029</option>
          <option>2030</option>
          <option>2031</option>
          <option>2032</option>
          <option>2033</option>
          <option>2034</option>
          <option>2035</option>
          <option>2036</option>
          <option>2037</option>
          <option>2038</option>
          <option>2039</option>
          <option>2040</option>
          </select>  CVV-
          <input type="password" name="cvv" maxlength="3" required>
        </td>
      </tr>
      <tr>
        <td>Card Holder Name</td>
        <td><input type="text" name="chn" required></td>
      </tr>
      <tr>
        <td><font size="6" color="red">Billing Address<hr></font></td>
      </tr>
      <tr>
        <td>Full Name</td>
        <td><input type="text" name="fn" required></td>
      </tr>
      <tr>
        <td>Contact Number</td>
        <td><input type="number" name="phone" required></td>
      </tr>
      <tr>
        <td>Email Address</td>
        <td><input type="email" name="em" required></td>
      </tr>
      <tr>
        <td>Delivery Address</td>
        <td><input type="text" name="addr1" required></td>
      </tr>
      <tr>
        <td>Alternate Address</td>
        <td><input type="text" name="addr2"></td>
      </tr>
      <tr>
        <td>Pincode</td>
        <td><input type="number" name="pin" required></td>
      </tr>
      <tr>
        <td><img src="captcha.jpg" width="100px" height="30px" border="1" /></td>
        <td><input type="text" name="captcha" placeholder="Enter the captcha" required></td>
      </tr>
      <tr>
        <td align="center" colspan="12"><a href="redirect1.php" style="text-decoration: none"><input type="submit" name="okay" value="Proceed"></a></td>
      </tr>
    </table>
  </form>
</div>
<?php  
  $query="SELECT * FROM cart";
  $exec=mysqli_query($connect,$query) or die(mysqli_error($connect));
  if(mysqli_num_rows($exec)>0)
  {
    ?>
    <br><br><br><br>
      <?php $sl=1;
      $sum=0;
      while($each=mysqli_fetch_array($exec))
      {
        $var=$each['Price'];
        $sum=$sum+$var;
        $sl++;
      }?>
      <p align="right"><font face="Agency FB" size="5">To Despacito Pizza Pvt. Ltd.</font></p><hr align="right" style="width:25%">
  <p align="right"><font color="red" face="Agency FB" size="5">Total Payment:  ₹<font color="blue"><?php echo $sum;?></font></font></p>
  <?php
  }
  else{
    echo "<p style='color:red' align='center'><font size='4'><b>Amount:Rs. 0</b></font></p>"; ?>
  <?php }
if (isset($_POST['okay']))
  {
  $Address=$_POST['addr1'];
  date_default_timezone_set("Asia/Kolkata");
  $currentdatetime=date('d-m-Y H:i:s');
  $Tracking=rand(0000000000,9999999999);
  $email=$_POST['em'];
  $phone=$_POST['phone'];
  $name=$_POST['fn'];
  $pincode=$_POST['pin'];
  $query_string ="INSERT INTO status VALUES('0','$name','$Tracking','$sum','$currentdatetime','$email','$phone','$Address','$pincode')";
  $exec =mysqli_query($connect,$query_string) or die(mysqli_error($connect));
  if($exec==1)
    header("Location:redirect1.php");
}?>
</body>
</html>
