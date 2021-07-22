<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>

<link rel="stylesheet" href="account.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style>
body{
background-image:linear-gradient(30deg,black,white,yellow);
}
</style>
<script>
function ssd(){
document.write("you have succesfully created your account");
}
function checkpw(){
	var x=document.getElementById("pw").value;
	var y=document.getElementById("conpw").value;
	var uname=document.getElementById("us").value;
	var eml=document.getElementById("ee").value;
	if(x!=y) {
		document.getElementById("xyz").innerHTML="** password must be same";
		return false;
	}
	else if(x.length<7){
		document.getElementById("xyz").innerHTML="** password must be 8-15 characters";
		return false;
	}
	else if(x.length>15){
		document.getElementById("xyz").innerHTML="** password must be 8-15 characters";
		return false;
	}
	else if(x.search(/[0-9]/)==-1 || x.search(/[a-z]/)==-1 || x.search(/[A-Z]/)==-1  || x.search(/[!\@\#\$\%\^\&\*\(\)]/)==-1){
		if(x.search(/[0-9]/)==-1)
		{
			document.getElementById("xyz").innerHTML="**atleast 1 numeric value is required";
			return false;
	    }
		else if(x.search(/[a-z]/)==-1)
		{
			document.getElementById("xyz").innerHTML="**atleast 1 lower case letter is required";
			return false;
	    }
		else if(x.search(/[A-Z]/)==-1)
		{
			document.getElementById("xyz").innerHTML="**atleast 1 upper case letter is required";
			return false;
	    }
		else if(x.search(/[!\@\#\$\%\^\&\*\(\)]/)==-1)
		{
			document.getElementById("xyz").innerHTML="**atleast 1 special character is required";
			return false;
	    }
	}
	if(!isNaN(uname)){
		document.getElementById("uss").innerHTML="**only characters are allowed";
		return false;
	}
	if(eml.charAt(eml.length-4)!='.' && eml.charAt(eml.length-3)!='.') {
		document.getElementById("ex").innerHTML="** Invalid email";
		return false;
	}
}
</script>
</head>
<body>

<div class="create">
<h2 align="center" class="re">Create an Account</h2>
<hr color="black">
<form  onsubmit="return checkpw()" autocomplete="off" method="POST">
<font size="5" >&nbsp Username :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i class="fa fa-user" aria-hidden="true"></i><input type="text" placeholder="Enter username" id="us" name="username" required>
<br>
<span id="uss"> </span>
<br>
<font size="5" >&nbsp Create password :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i class="fa fa-key" aria-hidden="true"></i><input type="password" placeholder="Enter password" id="pw"  name="password" required>
<br>
<span id="xyz" ></span>
<br>
<font size="5" >&nbsp Confirm password  :</font>&nbsp;
<i class="fa fa-key" aria-hidden="true"></i><input type="password" placeholder="Confirm password" id="conpw"  name="confpw" required>
<br><br>
<font size="5" >&nbsp Enter email :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i class="fa fa-envelope-o" aria-hidden="true"></i><input type="email" placeholder="Enter email" id="ee" name="email" required>
<br>
<span id="ex"> </span>
<br>
<font size="5" >&nbsp Gender :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" class="ppf" name="gender" value="male" required>Male
 <input type="radio" class="ppf" name="gender" value="female" required>Female
<br><br>
<font size="5" >&nbsp Date of Birth :</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i><input type="date" placeholder="Enter date of birth" name="dob" required>
<br><br><br>
<center><input type="submit" name="Submit" class="dd"></center>
</form>
<div>
</body>

</html>
<?php
if(isset($_POST['Submit']))
{
$un=$_POST["username"];
$pw=$_POST["password"];
$cnpw=$_POST["confpw"];
$em=$_POST["email"];
$gn=$_POST["gender"];
$datob=$_POST["dob"];
$query="insert into student values('$un','$pw','$em','$gn','$datob')";

$data=mysqli_query($conn,$query);

if($data){
	echo "<script>window.open('mm1.php');</script>";
	
	
}
else{
   echo "<script> alert('data has not inserted into database')</script>";
 echo "<script> location:href='craeteac1.php'</script>";
}
}
?>