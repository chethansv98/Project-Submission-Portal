if($_SERVER['REQUEST_METHOD'] =='POST')
{   
 $type_user=$_POST['type_user'];
 $sql="SELECT staff_id, name, email, role FROM user WHERE role='$type_user'";

 $run= $db->query($sql)
    or die($db -> error);

 $num=mysqli_num_rows($run);
 $row=mysqli_fetch_array($run, MYSQLI_ASSOC);
 //$yana =  $row['staff_id'];
 //echo "dd".$yana;

 echo "<table >
  <tr>
    <td >Staff ID </td>
    <td >Name</td>
    <td >Email</td>
    <td >Role</td>
  </tr>";

  while($row = mysqli_fetch_array($run, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>".$row['staff_id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['role']."</td>";
  echo "</tr>";
  echo "</table>";}

 }
 ?>