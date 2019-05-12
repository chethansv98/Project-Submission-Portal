<html>
<head>
<script type = "text/javascript" >
function chkpasswords() {
if (document.getElementById("firstpwd").value == ""){
alert('You have not entered a password, please enter ');
document.getElementById("firstpwd").focus();
return false;
}

if (document.getElementById("firstpwd").value !=
document.getElementById("secondpwd").value)
{
alert('The two password you entered are not same, please re-enter');
document.getElementById("firstpwd").focus();
document.getElementById("firstpwd").select();
return false; 
}
else {
    alert('The two password you entered are same');
	return true;
	}
}
</script>
</head>
<body>
<form name = "myForm" action="connectsign.php" onsubmit="return(chkpasswords());" method="POST">
<p>
</label> User Name: <input type = "text" id="username" name="name"> </label>
<br />
<br />
</label> Password: <input type = "password" id = "firstpwd" name="password" /> </label>
<br />
<br />
<label> Retype Password: <input type = "password" id = "secondpwd" /> </label>
<br />
<br />
<input type = "submit" name = "submit" />
</p>
</form>

</body>
</html>
