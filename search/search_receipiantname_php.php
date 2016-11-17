<?php
	include("../php/connection.php");
	$receipiantname=$_POST['receipiantname'];
	$q=mysql_query("select * from donorinfo where receipiantname like '%$receipiantname%'");
	//echo "select * from donorinfo where date='$date'";
	$r=mysql_num_rows($q);
	echo "<h1><font color='#0000FF'><center>BACHHPAN DATABASE</center></font></h1><br />";
	echo "<font size='+3' color='#0033FF'><center>DONOR DATA</center></font><br /><br />";

	echo "<center><table border=1 height='50'>
	<tr bgcolor='#FFFF33'>
		<th>receipt no</th>
		<th>first name</th>
		<th> last name</th>
		<th>student/faculty</th>
		<th>date</th>
		<th>email id</th>
		<th>contact no</th>
		<th>college name</th>
		<th>city</th>
	     <th>amount</th>
		<th>receipiant name</th>
	</tr></center>";
	if($r>0)
	{
		while($row=mysql_fetch_array($q))
		{
			
			echo "<center><tr bgcolor='#FFFFCC'>
			<td>$row[10]</td>
			<td>$row[1]</td>
			<td>$row[2]</td>
			<td>$row[3]</td>
			<td>$row[4]</td>
			<td>$row[5]</td>
			<td>$row[6]</td>
			<td>$row[7]</td>
			<td>$row[8]</td>
			<td>$row[9]</td>
			<td>$row[11]</td>
			</tr></center>";
			}
			
	}
	else
	{
		echo "<br>no record in table";
	}
	echo "</table>";
?>