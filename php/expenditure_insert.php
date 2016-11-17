<?php
include("connection.php");
$usedby=$_POST['usedby'];
$purpose=$_POST['purpose'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$date=$year."-".$month."-".$day;
$amount=$_POST['amount'];
$query="insert into expenditure(usedby,purpose,date,amount)values('$usedby','$purpose','$date','$amount')";
$r=mysql_query($query);
if($r)
{
	include("../alert/alert_donorinfo1.html");
}
else
{
	include("../alert/alert_exp2.html");
}


?>