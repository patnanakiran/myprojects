<html>
<body>
<?php
if(isset($_POST["submit"]))
{
$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
{
echo"not connected to server";
}

if(!mysqli_select_db($con,'iter'))
{
	echo"Database not selected";
}

$regd_no=$_POST["regdno"];
$name=$_POST["name"];
$recptno=$_POST["recptno"];
$amount=$_POST["amount"];

$sql="INSERT INTO fees values('$regd_no','$name','$recptno','$amount');";

if(!mysqli_query($con,$sql))
{
	echo"Try again";
}
else
{
	echo"Fee updated Sucessfully";
}
header("refresh:3;url=fee.html");
}

?>

</body>
</html>