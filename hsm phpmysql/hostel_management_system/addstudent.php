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

$regd_no=$_POST["regd_no"];
$date_of_join=$_POST["date_of_join"];
$a_no=$_POST["a_no"];
$s_name=$_POST["s_name"];
$f_name=$_POST["f_name"];
$m_name=$_POST["m_name"];
$localg_name=$_POST["localg_name"];
$hostel_no=$_POST["hostel_no"];
$room_no=$_POST["room_no"];
$bed_no=$_POST["bed_no"];
$branch=$_POST["branch"];
$sex=$_POST["sex"];
$parent_no=$_POST["parent_no"];
$p_email=$_POST["p_email"];
$mob_no=$_POST["mob_no"];
$s_email=$_POST["s_email"];
$local_no=$_POST["local_no"];
$t_address=$_POST["t_address"];
$p_address=$_POST["p_address"];

$sql="INSERT INTO studentinfo values('$regd_no','$date_of_join','$a_no','$s_name','$f_name','$m_name','$localg_name','$hostel_no','$room_no','$bed_no','$branch','$sex','$parent_no','$p_email','$mob_no','$s_email','$local_no','$t_address','$p_address');";

if(!mysqli_query($con,$sql))
{
	echo"Error in saving";
}
else
{
	echo"Data Saved";
}
header("refresh:3;url=newstudent.html");
}
mysqli_close($con);
?>

</body>
</html>