<html>
<body>
<form method="POST">
<table align=center>
<tr>
	<td>Username:</td>
	<td><input type="text" name="uname" required></td>
</tr>
<tr>
	<td>Password:</td>
	<td><input type="password" name="pwd" required></td>
</tr>
<tr>
	<td>Confirm Password:</td>
	<td><input type="password" name="cpwd" required><br>
</tr>
<tr>
	</td><td>
	</td><td>
</tr>
<tr>
	<td colspan=2 align=center><input type="submit" value="Create Account" name="signup"><td>
</tr>
</table>
</form>
<?php
if(isset($_POST["signup"]))
{
//connection to server
require 'sd_connect.php';

$username=$_POST['uname'];
$password=$_POST['pwd'];
$cpassword=$_POST['cpwd'];
if(preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $username) or preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $password))
{	
	echo "<script>alert('Special Characters not allowed');</script>";
    exit;	
}
if($password == $cpassword)
{
$sql="INSERT INTO userinfo (username,password) VALUES ('$username','$password');";
//query execution
$result=mysqli_query($con,$sql);
if(!$result)
{
	echo"<b>Error In Signup</b>";
}
else
{
	echo "<script>alert('Account Created Successfully');</script>";
}
}
else 
{
	echo "<script>alert('enter password and confirm password correctly');</script>";
}
//closing connection
mysqli_close($con);
}
?>
</body>
</html>