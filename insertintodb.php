<?php
$pname=$_POST['name'];
$pd=$_POST['desc'];
$sem=$_POST['sem'];
$tnm=$_POST['total'];
$pnm=$_POST['mname'];
$txt="Your Record Submitted Successfully";
echo "<script type=text/javascript> function disp() {alert($txt) ;} </script> ";
define('DB_HOST','localhost');
define('DB_NAME','WPPROJECT');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL : ".mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL : ".mysqli_error($con));
$query="INSERT INTO project_details1(serial_no,proj_name,Proj_desc,sem,totalmembers,Group_members_name)VALUES(NULL,'$pname','$pd','$sem','$tnm','$pnm')";
if(!isset($_POST['submit'])){
echo "Please fill out the deatils";
header('Location: submission.php');
} 
else
{
$result=mysqli_query($con,$query) or die(mysqli_error($con));
?>
<script>alert('Record Inserted Sucessfully');
	window.location.href ="submission.php";
	</script>
<?php
}
?>
