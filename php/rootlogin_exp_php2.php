<?php
$username="sr";
$password="sr123";
if(isset($_POST['submit']))
{
	if($_POST['username']==$username && $_POST['password']==$password)
	{
         header("location: ../php/display_expenditure.php");	
	}
	else
	{
 		include("../alert/alert_exp3.html");

	}

}

?>