<?php
	include("../php/connection.php");
	$year=$_POST['year'];
	$q=mysql_query("select * from volunteer where year='$year'");
	//echo "select * from donorinfo where date='$date'";
	$r=mysql_num_rows($q);
	echo "<h1><font color='#0000FF'><center>BACHHPAN DATABASE</center></font></h1><br />";
	echo "<font size='+3' color='#0033FF'><center>VOLUNTEER DATA</center></font><br /><br />";

	echo "<center><table border=1 height='50'>
	<tr bgcolor='#FFFF33'>
		<th>First Name</th>
		<th>Last Name</th>
		<th>College</th>
		<th>Branch</th>
		<th>Year</th>
		<th>Hobby</th>
		<th>Intrested In</th>
		<th>Email Id</th>
	     <th>Contact No</th>
	</tr></center>";
	if($r>0)
	{
		while($row=mysql_fetch_array($q))
		{
			
			echo "<center><tr bgcolor='#FFFFCC'>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>$row[4]</td>
			<td>$row[5]</td>
			<td>$row[6]</td>
			<td>$row[7]</td>
			<td>$row[8]</td>
			<td>$row[9]</td>
			</tr></center>";
			}
			
	}
	else
	{
		echo "<br>no record in table";
	}
	echo "</table>";
?>