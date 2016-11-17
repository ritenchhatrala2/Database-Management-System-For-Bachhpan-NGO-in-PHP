<?php
$username="sr";
$password="sr123";
if(isset($_POST['submit']))
{
	if($_POST['username']==$username && $_POST['password']==$password)
	{

         header("location: ../search/search_expenditure.php");	
	}
	else
	{
 		include("../alert/alert_search_exp.html");

	}

}

?>