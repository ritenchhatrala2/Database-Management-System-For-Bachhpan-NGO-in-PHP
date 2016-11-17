<?php
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		echo "<br> could not connect";
	}
	else
	{
		$db=mysql_select_db("bachhpan");
		if(!$db)
		{
			echo "<br> db not selected";
			$q=mysql_query("create database demo1");
			if(!$q)
			{
				echo "<br> db not created.";
			}
		}
	}
?>