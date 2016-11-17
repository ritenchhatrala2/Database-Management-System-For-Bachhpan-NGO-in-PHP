<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1><font color="#0000FF"><center>BACHHPAN DATABASE</center></font></h1><br />
<font size="+3" color="#0033FF"><center>DONOR INFO</center></font><br /><br />
<center>
<form action="../php/donor_reg1_php.php" method="post">
<table>
<tr>
<td>Receipt No</td>
<td><input type="text" name="receiptno" /></td>
</tr>
<tr>
<td>First Name</td>
<td><input type="text" name="firstname" /></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" name="lastname" /></td>
</tr>
<tr>
<td>Student/Faculty</td>
<td><select name="student">
<option value="student">Student</option>
<option value="faculty">Faculty</option>
<option value="others">Others</option>
</select>
</td>
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
<td>Email ID</td>
<td><input type="text" name="emailid" /></td>
</tr>
<tr>
<td>Contact No</td>
<td><input type="text" name="contactno" /></td>
</tr>
<tr>
<td>Amount</td>
<td><input type="text" name="amount" /></td>
</tr>
<tr>
<td>College/Other</td>
<td><input type="text" name="college" /></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" name="city" /></td>
</tr>
<tr>
<td>Receipiant Name</td>
<td><input type="text" name="receipiantname" /></td>
</tr>
</table><br />
<center><input type="submit" name="submit" /></center>
</form>
</center>
</body>
</html>