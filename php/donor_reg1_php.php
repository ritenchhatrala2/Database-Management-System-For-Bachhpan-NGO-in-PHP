<?php
include("connection.php");
$receiptno=$_POST['receiptno'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$student=$_POST['student'];
$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];
$date=$year."-".$month."-".$day;
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$amount=$_POST['amount'];
$college=$_POST['college'];
$city=$_POST['city'];
$receipiantname=$_POST['receipiantname'];
$query="insert into donorinfo(firstname,lastname,stu_fac,date,emailid,contactno,collegename,city,amount,receiptno,receipiantname)values('$firstname','$lastname','$student','$date','$emailid','$contactno','$college','$city','$amount','$receiptno','$receipiantname')";


$r=mysql_query($query);
if($r)
{
	include("../alert/alert_donorinfo1.html");
}
else
{
	include("../alert/alert_donorinfo2.html");
}
?>