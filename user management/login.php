<html>
<body>
<form method="POST">
<table align="center">
<tr>
	<td>Username:</td>
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
	<td><input type="submit" value="Log In" name="signin"></td>
	<td><input type="submit" value="UserInfo" name="userinfo"></td>
</tr>
</table>
</form>

<!for login>

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

$sql="select * from userinfo where username='$username' and password='$password';";
//query execution
$result=mysqli_query($con,$sql);
//count number of rows
$count=mysqli_num_rows($result);
if(!$count==1)
{
	echo "Invalid user";
}
else
{
	echo "valid user";
}
//closing connection
mysqli_close($con);
}
?>

<!for userinfo>

<?php
if(isset($_POST["userinfo"]))
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

$sql="select * from userinfo where username='$username' and password='$password' and previlege='ad';;";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if(!$count==1)
{
	echo "<script>alert('This user doesnt have permission');</script>";
}
else
{
	header("location:userinfo.php");
}
mysqli_close($con);
}
?>
</body>
</html>