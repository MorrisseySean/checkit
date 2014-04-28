<?php
if(isset($_POST['listName']))
{	
	include 'connection.php';
	//Create the checklist using the given name.	
	$createList = "INSERT into checklist(Name) VALUES('$_POST[listName]')";
	if(!mysql_query($createList))
	{
        die('Error ' . mysql_error());
	}
	//Get id of new checklist
	$getListId = "SELECT checklist.Id FROM checklist WHERE checklist.Name = '$_POST[listName]'";	
	$listId = mysql_query($getListId);
	
	//Loop through the checks and associate the checks with the list
	$checksArray = $_POST['listItem'];
	var checkNo = 0;
	foreach($checksArray as $arrayItem)
	{
		checkNumber++;
		$insertList = "INSERT into checkmapping (checkId, checklistId, CheckNumber) VALUES('$arrayItem', '$listId', 'checkNo')";
		mysql_query($insertList);
	}
	//return to checks page with updated info
	header("location: /checks.php");
}
?>
