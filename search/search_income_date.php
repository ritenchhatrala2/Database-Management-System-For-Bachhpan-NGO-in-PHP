<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1><font color="#0000FF"><center>BACHHPAN DATABASE</center></font></h1><br />
<font size="+3" color="#0033FF"><center>DATE WISE SEARCH</center></font><br /><br />
<center>
<form method="post" action="search_income_date_php.php">
<table>
<tr>
<td>Date</td>
<td>
<select name="year">
<?php
	for($i=2012;$i<=2015;$i++)
	{
		echo "<option value=$i>$i</option>";
	}
?>
</select>
<select name="month">
<?php
	for($j=1;$j<=12;$j++)
	{
			echo "<option value=$j>$j</option>";
	}
?>
</select>
<select name="day">
<?php
	for($k=1;$k<=31;$k++)
	{
		echo "<option value=$k>$k</option>";
	}
?>
</select>
</td>
</tr>
<tr>
<td><input type="submit" name="submit" value="search" /></td>
</tr>
</table>
</form>
</center>
</body>
</html>