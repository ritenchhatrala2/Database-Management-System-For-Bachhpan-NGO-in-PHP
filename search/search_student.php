<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1><font color="#0000FF"><center>BACHHPAN DATABASE</center></font></h1><br />
<font size="+3" color="#0033FF"><center>STUDENT/FACULTY OR COLLEGE WISE SEARCH</center></font><br /><br />
<center>
<form method="post" action="search_student_php.php">
<table>
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
<td>College/Other</td>
<td><input type="text" name="college" /></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="search" /></td>
</tr>
</table>
</form>
</center>
</body>
</html>