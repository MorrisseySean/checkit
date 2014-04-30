<?php
if(isset($_POST['showDescr']))
{	
        
	include 'connection.php';
	
	$editCheck = "UPDATE checks SET Description = '$_POST[showDescr]', TypeId = '$_POST[viewCheckTypeIdEdit]' WHERE Id = '$_POST[viewCheckIdEdit]' AND TypeId = '$_POST[viewCheckTypeIdEdit]'";
	if(!mysql_query($editCheck))
	{
		die('Error ' . mysql_error());
	}
	//return to checks page with updated info
	header("location: /checks.php");
}
?>