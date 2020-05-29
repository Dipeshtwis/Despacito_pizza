<?php
session_start();
$host='localhost';
$username='root';
$password='';
$dbname='pizza';
$connect=mysqli_connect($host,$username,$password,$dbname) or die(mysqli_error($connect));
?>