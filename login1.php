<?php
define('DB_HOST','localhost');
define('DB_NAME','WPPROJECT');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("Failed to connect to Mysql:".mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to Mysql:".mysqli_error($con));
if(isset($_POST['login']))
{
	$uname=$_POST['str'];
$pass=$_POST['strr'];



$check_user="SELECT *FROM signup WHERE username='$uname' AND Password='$pass'";
$run=mysqli_query($con,$check_user);
if(mysqli_num_rows($run))
{
	header("location:stu_home.php");
}
else

?>
	<script>alert('Enter the valid username and password');
window.location.href ="stu_login1.php";
	</script>
<?php
}
?>

