<html>
	<head>
		<title>SOA HOSTELS</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
	<style>
#button{
background:brown;
color:white;
height:30px;
width:60px;
}
#button:hover{opacity: 0.8;}
#txt{height:30px;width:290px;}
</style>
<script>

</script>
	</head>
<body>
<div align=center>
<form method="POST" action="" target="_parent">
<table>
<tr>
<td>EMPLOYEE ID:</td>
<td><input type="text" name="username" id="txt"></td>   
</tr>
<tr>
<td>PASSWORD:</td>
<td><input type="password" name="password" id="txt"></td>
</tr>
<tr>
<td><input type="submit" value="Log In" name="login" id="button"></td>
<td><a href="signup.html"><input type="button" value="Sign Up" id="button"></a></td>
</tr>
</table>
</form>
</div>
<?php
if(isset($_POST["login"]))
{
$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	echo "Not connected to server";
}
if(!mysqli_select_db($con,'iter'))
{
	echo "Database not selected";
}
$username=$_POST['username'];
$password=$_POST['password'];

if(preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $username) or preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $password))
{	
	echo "<script>alert('Please check your username and password');</script>";
    exit;	
}

$sql="select * from employee where emp_id='$username' and password='$password';";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if(!$count==1)
{
	echo "<font size=5 color=red><center><b>Please check your username and password</b></center></font>";
}
else
{
	echo "valid user";
	


header("Location: emphome.html");
} 
}
?>  
</body>
</html>
