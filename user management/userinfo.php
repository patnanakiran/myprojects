<html>
<body>
<form method="POST">
<table>
	<tr>
		<td>From Date:</td>
		<td><input type="date" name="fdate"></td>
		<td>To Date:</td>
		<td><input type="date" name="tdate"></td>
		<td><input type="submit" value="Find" name="search"></td>
	</tr>
</table>
</form>
<?php
if(isset($_POST["search"]))
{
	//connection to server
require 'sd_connect.php';

$fdate=strtotime($_POST['fdate']);
$fromdate=Date("y-m-d",$fdate);

$tdate=strtotime($_POST['tdate']);
$todate=Date("y-m-d",$tdate);

if($todate >= $fromdate)
{	
$sql="select * from userinfo where date_created between'$fromdate' and '$todate'; ";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
 if( $count > 0)
	{
        echo "<table cellspacing=4 cellpadding=4 align=center border=1>";
            echo "<tr>";
                echo "<th>username</th>";
				echo "<th>password</th>";
				echo "<th>status</th>";
				echo "<th>date created</th>";
				echo "<th>previlege</th>";
			echo "</tr>";
		while($row = mysqli_fetch_array($result))
		{
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
				echo "<td>" . $row['status'] . "</td>";
				echo "<td>" . $row['date_created'] . "</td>";
				echo "<td>" . $row['previlege'] . "</td>";
            echo "</tr>";
		}
		echo "</table>";
	}
}	
else
   {
	echo $fromdate."   ".$todate;
	echo"<script>alert('please enter valid todate');</script>";
   }
mysqli_close($con);
}
?>
</body>
</html>
