<?php
include 'connectsign.php';
$name=$_POST['name'];
$password=$_POST['password'];
mysqli_query($connection,"INSERT INTO 'userinform'('Id','username','password') VALUES(NULL,'$name','$password')")or die(mysqli_error($connection));
?>
<script>
window.location.href="signup.php";
</script>
<?php
}
?>