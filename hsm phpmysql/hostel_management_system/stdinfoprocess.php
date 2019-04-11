<html>
<head>
<style type="text/css">
table
{
border-style:solid;
}
td
{
background-color:#c9ffd4;
}
th{
background-color:#9cd7a7;
}
</style>
</head>
<body>
<div>
<img src="images/logo.png" height=90 width=90 align=left>
<center>
<h1>SOA HOSTEL MANAGEMENT</h1>
</center>
</div>
<br><br>
<hr size=3 color=blue>
<h1 align=center>Student Details</h1>
<?php

$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
{
echo"not connected to server";
}
if(mysqli_select_db($con,'iter'))
{
$search=$_POST["regdno"];
$sql=mysqli_query($con,"select regd_no,s_name,f_name,hostel_no,room_no,branch,mob_no,t_address from studentinfo where regd_no='$search';");
}
$count=mysqli_num_rows($sql);

    if( $count > 0)
	{
        echo "<table cellspacing=4 cellpadding=4 align=center>";
            echo "<tr>";
                echo "<th>Regd no</th>";
				echo "<th>Student Name</th>";
				echo "<th>Father's Name</th>";
				echo "<th>Hostel no</th>";
				echo "<th>Room no</th>";
				echo "<th>Branch</th>";
				echo "<th>Mobile no</th>";
				echo "<th>Address</th>";
            echo "</tr>";
				
		while($row = mysqli_fetch_array($sql))
		{
            echo "<tr>";
                echo "<td>" . $row['regd_no'] . "</td>";
                echo "<td>" . $row['s_name'] . "</td>";
				echo "<td>" . $row['f_name'] . "</td>";
				echo "<td>" . $row['hostel_no'] . "</td>";
				echo "<td>" . $row['room_no'] . "</td>";
				echo "<td>" . $row['branch'] . "</td>";
				echo "<td>" . $row['mob_no'] . "</td>";
				echo "<td>" . $row['t_address'] . "</td>";
            echo "</tr>";
		}
		echo "</table>";
	}
mysqli_close($con);		
?>
<br><br>
<form align=center>
	<input type="button" value="Print" onclick="window.print()">
</form>
</body>

</html>