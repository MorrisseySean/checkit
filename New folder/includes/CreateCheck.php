<?php
if(isset($_POST['Description']))
{	
	$con = mysql_connect("localhost", "root", "");
	
	if(!$con){
		die('Could not connect to database!: ' . mysql_error());
	}
	
	mysql_select_db("checkit", $con);
	
	$createCheck = "INSERT into checks(Description, TypeId)
	VALUES
	('$_POST[Description]','$_POST[TypeId]')";
	
	if(!mysql_query($createCheck, $con)){
		die('Error ' . mysql_error());
	}
	
	//return to checks page with updated info
	header("location: /checks.php");
}
?>
