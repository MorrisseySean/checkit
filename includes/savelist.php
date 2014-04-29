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
	if(!mysql_query($getListId))
	{
			die('Error ' . mysql_error());
	}
	//Prepares statement to map checks to the checklist
	$stmt = $dbh->prepare("INSERT into checkmapping (checkId, checklistId, CheckNumber) VALUES (?, ?, ?)");
	//Places the array into a variable
	$checksArray = $_POST['listItem'];
	$checkNo = 0;
	//Loops through and executes the prepared statements with the values
	foreach($checksArray as $arrayItem)
	{
		echo $arrayItem;
		$checkNo++;
		$stmt->execute(array('$arrayitem', '$listId', '$checkNo'));
		/*$insertList = "INSERT into checkmapping (checkId, checklistId, CheckNumber) VALUES('$arrayItem', '$listId', '$checkNo')";
		if(!mysql_query($insertList))
		{
			die('Error ' . mysql_error());
		}*/
	}
	//return to checks page with updated info
	
}
?>
