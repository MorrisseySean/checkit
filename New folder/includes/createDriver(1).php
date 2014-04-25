<?php
//Only run of a username has been given
if(isset($_POST['driver']))
{
	//set up connection and return an error if unable to establish a connection
	$con = mysql_connect("localhost", "root", "");
	if(!$con)
	{
		die('Could not connect to database!: ' . mysql_error());
	}
	echo "BEFORE: $_POST[Registration]";
	mysql_select_db("checkit", $con);
	if ($_POST['Registration'] === "") 
	{
		$_POST['Registration'] = 'Null'; // If 'none' registration is selected assign null value
	}
	echo "AFTER: $_POST[Registration]";
	$createDriver = "INSERT into user(Username, VehicleId)VALUES
	('$_POST[driver]','$_POST[Registration]')";
	
	//Error checking
	if(!mysql_query($createDriver, $con))
	{
		die('Error ' . mysql_error());
	}	
	//return to drivers page with updated info.
	header("location: /drivers.php");
}
?>