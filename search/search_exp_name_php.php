<?php
	include("../php/connection.php");
	$usedby=$_POST['usedby'];
	$q=mysql_query("select * from expenditure where usedby like '%$usedby%'");
	//echo "select * from donorinfo where date='$date'";
	$r=mysql_num_rows($q);
	echo "<h1><font color='#0000FF'><center>BACHHPAN DATABASE</center></font></h1><br />";
	echo "<font size='+3' color='#0033FF'><center>EXPENDITURE DATA</center></font><br /><br />";

	echo "<center><table border=1 height='50'>
	<tr bgcolor='#FFFF33'>
		<th>Used By</th>
		<th>Purpose/th>
		<th>Date</th>
	     <th>amount</th>
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
			</tr></center>";
			}
			
	}
	else
	{
		echo "<br>no record in table";
	}
	echo "</table>";
?>