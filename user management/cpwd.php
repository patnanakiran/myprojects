<html>
<body>
<form method="POST">
<table align=center>
<tr>
	<td>Username:</td>
	<td><input type="text" name="uname" required></td>
</tr>
<tr>
	<td>Current Password:</td>
	<td><input type="password" name="cupwd" required></td>
</tr>
<tr>
	<td>New Password:</td>
	<td><input type="password" name="npwd" required></td>
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
	<td colspan=2 align=center><input type="submit" value="Change Password" name="cpwdbtn"><td>
</tr>
</table>
</form>
<?php
if(isset($_POST["cpwdbtn"]))
{
	//connection to server
require 'sd_connect.php';

$username=$_POST['uname'];
$password=$_POST['cupwd'];
$npassword=$_POST['npwd'];
$cpassword=$_POST['cpwd'];

if(preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $username) or preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $password) or preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $npassword))
{	
	echo "<script>alert('Special Characters not allowed');</script>";
    exit;	
}

if($cpassword!=$npassword)
{
	die( "<b>New Password and Confirm Password doesn't match</b>");
}

$sql="update userinfo set password='$npassword' where username='$username'";
$result=mysqli_query($con,$sql);

if(!$result)
{
	echo"<b>Password change error</b>";
}
else
{
	echo"<b>Password changed Successfully</b>";
}

mysqli_close($con);
}
?>

</body>
</html>