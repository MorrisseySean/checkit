<?php
if(isset($_POST['Description']))
{	
	$con = mysql_connect("localhost", "root", "");
	
	if(!$con)
	{
		die('Could not connect to database!: ' . mysql_error());
	}
	
	mysql_select_db("checkit", $con);
	
	$editCheck = "UPDATE checks SET Description = '$_POST[Description]', TypeId = '$_POST[TypeId]' WHERE Id = '$_POST[checkId]'";
	if(!mysql_query($editCheck, $con))
	{
		die('Error ' . mysql_error());
	}
	//return to checks page with updated info
	header("location: /checks.php");
}
?>