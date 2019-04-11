<?php
	//connection to server
$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	die("Not connected to server");
}
//connection to database
if(!mysqli_select_db($con,'user_management'))
{
	die("Database not selected");
}
?>