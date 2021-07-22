<?php
	include("connection.php");
	error_reporting(0);
?>
<html>
<head>
<link rel="stylesheet"  href="jk.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<title> My web page </title>
<style>
body{
background-image:linear-gradient(30deg,red,green,yellow);
}

</style>
<script>
function display()
{
document.write("http://www.facebook.com");
}




</script>

</head>

<body>
<center><div>
<form   method="POST">
<center><a href="createac1.php"> create an account &nbsp;   &nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;  &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp; Sign up</a></center>
<br>

<hr color="blue">
Email :   &nbsp;&nbsp;    &nbsp;    &nbsp;<i class="fa fa-envelope" aria-hidden="true"></i>
<input type="email" id="my" placeholder="Enter email" name="emli">
<br><br>
password:&nbsp;   &nbsp; <i class="fa fa-lock" aria-hidden="true"></i><input type="password" id="you"  name="pwd" placeholder="Enter password">
<br>
<span id="ab"> </span>
<br>

<br>
<center> <input type="submit" name="esubmit" class="tt"></center>
<hr color="lightblue">
<br>
 <a class="div" href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i>

  Facebook </a>&nbsp;   &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;   &nbsp;  
 &nbsp;   &nbsp;<a class="div" href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i>
  Twitter</a>

</form>

</div>
</center>
</body>
</html>
<?php
     if(isset($_POST['esubmit']))
  {  $email=$_POST['emli'];
	 $password=$_POST['pwd'];
	 $query="select * from student where Email='$email' and password='$password'";
	 $result=mysqli_query($conn,$query);
	 $count=mysqli_num_rows($result);
 if($count>0){
	 echo "<script>
	 alert('redirecting to Gmail SMTP server');
	 window.open('https://kinsta.com/blog/gmail-smtp-server/');
	 </script>";
 }
	else{
		echo "<script>
		document.getElementById('ab').innerHTML='**password or email invalid';
		</script>";
	}
 }
?>
