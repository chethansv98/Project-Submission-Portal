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
<style type="text/css">
.one{
background-color:silver;
text-align:center;
padding:30px;
height:100%;
}
.two{float:center;}
</style>
</head>
<body>
<div class="one">
<image class="two" src="bms.png"  width="200" height="200"><br/>
<h1>Set Username and Password</h1>
<form name = "myForm" action="connectsign.php" onsubmit="return(chkpasswords());" method="POST">
<p>
</label> User Name: <input type = "text" id="username" name="name" placeholder="Enter user name"/> </label>
<br />
<br />
</label> Password: <input type = "password" id = "firstpwd" name="password" placeholder="Enter password"/> </label>
<br />
<br />
<label> Retype Password: <input type = "password" id = "secondpwd" placeholder="Re enter password" /> </label>
<br />
<br />
<input type = "submit" name = "submit" />
</p>
</form>
</div>
</body>
</html>
