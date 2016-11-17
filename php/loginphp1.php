<?php

// Inialize session
//session_start();

// Include database connection settings
include('connection.php');

// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM user WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string(md5($_POST['password'])) . "')");
//echo $login;
//echo "SELECT * FROM user WHERE (username = '" . mysql_real_escape_string($_POST['username']) . "') and (password = '" . mysql_real_escape_string(md5($_POST['password'])) . "')";
//$s=mysql_num_rows($login);
//echo $s;
// Check username and password match
if (mysql_num_rows($login) == 1) {
        // Set username session variable
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



?>