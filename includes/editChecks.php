<?php
if(isset($_POST['viewDescs']))
{	
	include 'connection.php';
	
	$editCheck = "UPDATE checks SET Description = '$_POST[viewDescs]', TypeId = '$_POST[viewTypeIds]' WHERE Id = '$_POST[viewIds]' AND TypeId = '$_POST[viewTypeIds]'";
	if(!mysql_query($editCheck, $connect))
	{
		die('Error ' . mysql_error());
	}
	//return to checks page with updated info
	header("location: /checks.php");
}
?>