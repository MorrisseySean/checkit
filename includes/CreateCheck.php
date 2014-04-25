<?php
if(isset($_POST['Description']))
{	
	include 'connection.php';
		
	$createCheck = "INSERT into checks(Description, TypeId)
	VALUES
	('$_POST[Description]','$_POST[TypeId]')";
	
	if(!mysql_query($createCheck)){
            die('Error ' . mysql_error());
	}
	//return to checks page with updated info
	header("location: /checks.php");
}
?>
