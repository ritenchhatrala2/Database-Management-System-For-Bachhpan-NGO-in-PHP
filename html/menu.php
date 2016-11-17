<?php
session_start();
//echo $_SESSION['username'];
if((!isset($_SESSION['riten']))&&(!isset($_SESSION['chhatrala'])))
{
		header('Location: ../html/index.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<h1><font color="#0000FF"><center>BACHHPAN DATABASE</center></font></h1><br /><br /><br />
<center>
<table>
<tr>
<td><a href="insertdata.html"><input type="button" size="50" value="INSERT NEW DATA" /></a></td>
<td><a href="displaydata.html"><input type="button" size="50" value="DISPLAY DATA" /></a></td>
<td><a href="../search/search_menu.php"><input type="button" size="50" value="SEARCH DATA" /></a></td>
<td><a href="../session/session_destroy.php"><input type="button" size="50" value="LOGOUT" /></a></td>
</tr>
</table>
</center>
</body>
</html>
