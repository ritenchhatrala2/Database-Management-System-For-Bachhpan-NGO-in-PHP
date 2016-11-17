<?php
include("connection.php");
$collectedby=$_POST['collectedby'];
$source=$_POST['source'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$date=$year."-".$month."-".$day;
$amount=$_POST['amount'];
$query="insert into income(collectedby,source,date,amount)values('$collectedby','$source','$date','$amount')";
$r=mysql_query($query);
if($r)
{
	include("../alert/alert_donorinfo1.html");
}
else
{
	include("../alert/alert_income1.html");
}


?>