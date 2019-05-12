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

<script type="text/javascript">
function validate()
{
strValidate=strForm.str.value.search(/umadevi/i);

if(strValidate== -1);
{
alert("Enter the valid username and password");
}
alert("Valid");
}
</script>
</head>
<body>
<div class="one">
<image class="two" src="bms.png"  width="200" height="200">
<h1>Teacher Login</h1>
<form name="strForm" action="login2.php" onsubmit="validate();" method="POST">
<label><b>Username:</b>
<input type="text" name="strr" placeholder="Enter user name"/>
</label>
<br/><br/><br/><br/>
<label><b>Password:</b>
<input type="password" name="strrr" placeholder="Enter password"/>
</label>
<br/><br/><br/><br/>
<label><input type="submit"
name="loginn"
value="Login"/>
<br/><br/><br/><br/><br/><br/><br/><br/>
</label>
</form>
</div>
</body>
</html>