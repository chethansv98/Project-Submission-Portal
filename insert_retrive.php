<?php
include 'eval_proj.php';
$txt="Accept/Reject";
$love="Remarks";
$bms="-----------------------------------------------------------------------------------------------------------------------------------------------------------";
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
// $row=mysqli_fetch_array($run, MYSQLI_ASSOC);
//echo "<table border=1 >
//  <tr>
 //   <td >Serial_No </td>
  //  <td >Proj_nameName</td>
  //  <td >Proj_desc</td>
   // <td >Sem</td>
	//<td >Totalmembersotal</td>
//	<td >Group_members_name</td>
 // </tr>";

  while($row = mysqli_fetch_array($run, MYSQLI_ASSOC))
  {
 // echo "<h5>";
  echo "<h4>Serial_No:".$row['Serial_No']."</h4>"; 
  echo "<h4>Proj_name : ".$row['Proj_name']."</h4>";
  echo "<h4>Proj_description:</h4><h4>".$row['Proj_desc']."</h4>";
  echo "<h4>Sem:".$row['Sem']."</h4>";
  echo "<h4>Totalmembers:".$row['Totalmembers']."</h4>";
  echo "<h4>Members_Name:".$row['Group_members_name']."</h4>";
 echo "<b>".$txt."</b><br/>";
 echo "<form action=insertintodb2.php method=POST>";
echo "<label required><input type=radio name=name value=Accept>Accept
<input type=radio name=name value=Reject>Reject
</label><br/><br/>";
echo "<label><b>".$love."</b><br/>";
echo "<textarea id=feedback name=remarks Placeholder=Project description required></textarea>
</label><br/><br/>";
echo "<label><input type=submit name=submit value=SUBMIT></label>";
echo "</form>";
echo "<p>".$bms."</p>";}
 // echo "</tr>";}
  //echo "</table>";
  
?>