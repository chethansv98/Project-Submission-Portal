<!DOCTYPE html>
<html>
<head>
<tittle>
</tittle>
<style type="text/css">
.one{
background-color:silver;
text-align:center;
padding:30px;
height:600px;
}
.two{float:center;}
</style>

</head>
<body>
<div class="one">
<image class="two" src="bms.png"  width="200" height="200">
<h1>Student Login</h1>
<form action="login1.php" name="strForm"  method="POST" >
<label><b>Username:</b>
<input type="text" name="str" placeholder="Enter user name"/>
</label>
<br/><br/><br/><br/>
<label><b>Password:</b>
<input type="password" name="strr" placeholder="Enter password"/>
</label>
<br/><br/><br/><br/>
<label><input type="submit"
name="login"
value="Login"/></label>

</form>
<br/><br/>
<form action="signup1.php">
<label><input type="submit"
name="name"
value="SIGNUP"/></label>
<br/><br/><br/><br/>


</div>
</body>
</html>