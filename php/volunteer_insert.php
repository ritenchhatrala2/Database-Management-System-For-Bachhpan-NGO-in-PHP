<?php
include("connection.php");
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$college=$_POST['college'];
$year=$_POST['year'];
$branch=$_POST['branch'];
$interestedin=$_POST['interestedin'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$hobby=$_POST['hobby'];

$query="insert into volunteer(firstname,lastname,college,branch,year,hobby,interestedin,emailid,contactno)values('$firstname','$lastname','$college','$branch','$year','$hobby','$interestedin','$emailid','$contactno')";


$r=mysql_query($query);
if($r)
{
	include("../alert/alert_donorinfo1.html");
}
else
{
	include("../alert/alert_volunteer.html");
}
?>