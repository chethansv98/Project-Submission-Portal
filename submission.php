<!DOCTYPE html>
<html>
<head>
<tittle>
</tittle>
<style type="text/css">
.one{
background-color:silver;
text-align:center;
color:blue;
font-size:23pt;
padding:10px;
height:20%;
}
.two{float:right;}
.three{
background-color:#B1FB17;
text-align:center;
width:20%;  height:650px;
float:left;
}
.four{
background-color:#FEFCFF;
text-align:left;
width:80%   height:80%;
float:left;
}
textarea#feedback {
  width: 1000px;
  height: 100px;
}
</style>
</head>
<body>
<div class="one">
<image class="two" src="bms.png""  width="100" height="100">
<h1 class="one">BMS COLLEGE OF ENGINEERING,BANGALORE</h1>
<h2 class="one">Project Proposal Submission System</h2>
</div>
<div class="three">
<br/><br/><br/><br/><br/>
<a href="stu_home.php">Home</a>
<br/><br/><br/><br/>
<a href="submission.php">Submission</a>
<br/><br/><br/><br/>
<a href="retrivestud.php">Projects</a>
<br/><br/><br/><br/>
<a href="retrive_status.php">Project Status</a>
<br/><br/><br/><br/>
<a href="welcome1.php">Logout</a>
<br/><br/><br/><br/><br/>
</div>

<div class="four">
<h3 style="text-align:center; font-family:times new roman; font-size:20pt;">Fill Project Details</h3>
<br/>
<form action="insertintodb.php" method="POST">
<label><b>Project Name:</b>
<input type="text" name="name" placeholder="Enter Project name"  required />

</label><br/><br/>
<label><b>Project Description:</b><br/>
<textarea id="feedback" name="desc" Placeholder="Project description" required></textarea>


</label><br/><br/>
<label><b>Sem:</b>
<select name="sem"
<option value="2">2</otion>
<option value="3">3</otion>
<option value="4">4</otion>
<option value="5">5</otion>
<option value="6">6</otion>
<option value="7">7</otion>
<option value="7">8</otion>
</select>
</label>
<br/><br/>
<label><b>Total No.of Members:</b>
<select name="total">
<option value="2">2</otion>
<option value="3">3</otion>
<option value="4">4</otion>
<option value="5">5</otion>

</select>
</label><br/><br/>
<label><b>Project Members Name:<b><br/>
<textarea id="feedback" name="mname"  Placeholder="Project members name" required></textarea>
</label><br/><br/>
<input type="submit" value="SUBMIT" name="submit">


</form>

</div>

</body>
</html>