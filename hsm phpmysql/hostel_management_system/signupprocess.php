<html>
<body>
<?php
if(isset($_POST["signup"]))
{
$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	echo "not connected to server";
}
if(!mysqli_select_db($con,'iter'))
{
	echo "Database not selected";
}
$emp_id=$_POST['emp_id'];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$sex=$_POST['sex'];
$hostel_no=$_POST['hostel_no'];
$password=$_POST['password'];
$c_password=$_POST['c_password'];
$mob_no=$_POST['mob_no'];
$address=$_POST['address'];

if(preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $username) or preg_match('/[\'^£$%&*()}{#~?><>,|=+¬-]/', $password))
{	
	echo "<script>alert('Special Characters not allowed');</script>";
    exit;	
}

$sql="INSERT INTO employee VALUES ('$emp_id','$f_name','$l_name','$sex','$hostel_no','$password','$c_password','$mob_no','$address');";

$result=mysqli_query($con,$sql);

if(!$result)
{
	echo"Error In Signup";
}
else
{
	echo"<b>Account Created Successfully</b>";
}
mysqli_close($con);
}
?>
</body>
</html>