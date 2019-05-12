<?php
$par=$_POST['name'];
$prm=$_POST['remarks'];

$txt="Your Record Submitted Successfully";
define('DB_HOST','localhost');
define('DB_NAME','WPPROJECT');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL : ".mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL : ".mysqli_error($con));
$query="INSERT INTO tea_evaluation(id,accept_reject,remarks)VALUES(NULL,'$par','$prm')";
$result=mysqli_query($con,$query);
	
if($result)
{

	header("location:insert_retrive.php");
	echo "<script>alert(".$txt.")</script>";
}
else
{
	die('Error:'.mysqli_error($con));
}
mysqli_close($con);
?>

