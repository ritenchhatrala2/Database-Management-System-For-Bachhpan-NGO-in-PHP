<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1><font color="#0000FF"><center>BACHHPAN DATABASE</center></font></h1><br />
<font size="+3" color="#0033FF"><center>INSERT INCOME DATA</center></font><br /><br />
<center>
<form method="post" action="../php/income_insert.php">
<table>
<tr>
<td>Collected By</td>
<td><input type="text" name="collectedby" /></td>
</tr>
<tr>
<td>Source</td>
<td><textarea name="source" rows="5" cols="50" ></textarea></td>
</tr>
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
echo "ssaas";
	for($j=1;$j<=12;$j++)
	{
		echo "adsda";
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
<td>Amount</td>
<td><input type="text" name="amount" /></td>
</tr>
<tr>
<td>Total Income</td>
<td><input type="button" value="TOTAL" /></td>
</tr>
</table><br />
<center><input type="submit" name="submit" /></center>
</form>
</center>
</body>
</html>