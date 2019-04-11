<html>
<body>
<form method="POST">
Enter username:<input type="text" name="uname" required>
<input type="submit" value="change status" name="cstatus">
</form>
<?php
if(isset($_POST['cstatus']))
{
	//connection to server
require 'sd_connect.php';

$uname=$_POST['uname'];
if(preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $uname)
{	
	echo "<script>alert('Special Characters not allowed');</script>";
    exit;	
}
$sql="select * from userinfo where username='$uname' and status="."'active';";

//query execution
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1)
{
	$sql1="update userinfo set status='suspended' where username='$uname';";
	mysqli_query($con,$sql1);
	echo"<script>alert('Status suspended');</script>";
}
else
{
	$sql2="update userinfo set status='active' where username='$uname';";
	mysqli_query($con,$sql2);
	echo"<script>alert('Status Active');</script>";
}	
//closing connection
mysqli_close($con);
}
?>
</body>
</html>