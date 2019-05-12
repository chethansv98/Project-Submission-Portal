<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$sub=$_POST['sub'];
$enquiry=$_POST['enq'];


define('DB_HOST','localhost');
define('DB_NAME','wp');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL : ".mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL : ".mysqli_error($con));
$query="INSERT INTO contactus(ID,contactName,contactEmail,contactPhone,subject,enquir)VALUES(NULL,'$name','$email','$phone','$sub','$enquiry')";
$result=mysqli_query($con,$query);
if($result)
{
	header("location:home.html");
}
else
{
	die('Error : '.mysqli_error($con));
}
mysqli_close($con);
?>