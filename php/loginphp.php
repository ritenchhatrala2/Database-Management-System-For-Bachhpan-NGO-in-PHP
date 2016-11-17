<?php
$username="bachhpan";
$password="bachhpan123";
if(isset($_POST['submit']))
{
	if($_POST['username']==$username && $_POST['password']==$password)
	{
		 //include('../session/session_start.php');
		 session_start();
		 $_SESSION['riten']=$_POST['username'];
		$_SESSION['chhatrala']=$_POST['password'];
		//echo $_SESSION['username']; 
		//include("../session/session_start.php");
         header('Location: ../html/menu.php');	
	}
	else
	{
 		include("../alert/alert1.html");

	}

}

?>