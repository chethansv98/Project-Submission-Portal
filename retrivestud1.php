<?php
include 'projectsview1.php';
define('DB_HOST','localhost');
define('DB_NAME','WPPROJECT');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD)or die("Failed to connect to Mysql:".mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to Mysql:".mysqli_error($con));
//if(isset($_POST['display']))
	//$id=$_POST['Serial_No'];
//	$pname=$_POST['Proj_name'];
//$pd=$_POST['desc'];
//$sem=$_POST['sem'];
//$tnm=$_POST['total'];
//$pnm=$_POST['mname'];

$check_user="SELECT *FROM project_details1 ";
$run=mysqli_query($con,$check_user);
$num=mysqli_num_rows($run);
 //$row=mysqli_fetch_array($run, MYSQLI_ASSOC);
echo "<table border=1 >
  <tr>
    <td >Serial_No </td>
    <td >Proj_nameName</td>
    <td >Proj_desc</td>
    <td >Sem</td>
	<td >Totalmembers</td>
	<td >Group_members_name</td>
  </tr>";

  while($row = mysqli_fetch_array($run, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>".$row['Serial_No']."</td>";
  echo "<td>".$row['Proj_name']."</td>";
  echo "<td>".$row['Proj_desc']."</td>";
  echo "<td align=center>".$row['Sem']."</td>";
  echo "<td align=center>".$row['Totalmembers']."</td>";
  echo "<td>".$row['Group_members_name']."</td>";
  echo "</tr>";}
  echo "</table>";
?>

