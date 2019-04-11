<html>
<body>
<form method="POST">
<table align=center>
<tr>
	<td>Admin Username:</td>
	<td><input type="text" name="uname" required></td>
</tr>
<tr>
	<td>Password:</td>
	<td><input type="password" name="pwd" required></td>
</tr>
<tr>
	</td><td>
	</td><td>
</tr>
<tr>
	<td colspan=2 align=center><input type="submit" value="Sign In" name="signin"><td>
</tr>
</table>
</form>
<?php
if(isset($_POST["signin"]))
{
	//connection to server
require 'sd_connect.php';

$username=$_POST['uname'];
$password=$_POST['pwd'];

if(preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $username) or preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $password))
{	
	echo "<script>alert('Special Characters not allowed');</script>";
    exit;	
}

$sql="select * from userinfo where username='$username' and password='$password' and previlege='ad';";
//query execution
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if(!$count==1)
{
	echo "<script>alert('check your password and username');</script>";
}
else
{
	echo "<script>alert('login successfully');</script>";
	header("Location: status.php");
}
//closing connection
mysqli_close($con);
}
?>

</body>
</html>