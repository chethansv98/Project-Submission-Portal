<?php
define('DB_HOST','localhost');
define('DB_NAME','WPPROJECT');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("Failed to connect to Mysql:".mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to Mysql:".mysqli_error($con));
if(isset($_POST['loginn']))
{
	$uname=$_POST['strr'];
$pass=$_POST['strrr'];



$check_user="SELECT *FROM tealogin WHERE username='$uname' AND password='$pass'";
$run=mysqli_query($con,$check_user);
if(mysqli_num_rows($run))
{
	header("location:tea_home.php");
}
else
?>
	<script>alert('Enter the valid username and password');
window.location.href ="tea_login.php";
	</script>
<?php
}
?>

	

