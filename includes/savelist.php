<?php
if(isset($_POST['listName']))
{	
	include 'connection.php';
	
	//Create the checklist using the given name.
	$name = $_POST['listName'];
	$stmt = $dbh->prepare("INSERT into checklist (Name) VALUES (?)");
	$stmt->execute(array($name));
	
	//Finds the Id of the newly created list
	$stmt = $dbh->prepare("SELECT checklist.Id FROM checklist WHERE checklist.Name = '$_POST[listName]'");
	if($stmt->execute())
	{
		$listId = $stmt->fetchColumn();
	}
	
	//Prepares statement to map checks to the checklist
	$stmt = $dbh->prepare("INSERT into checkmapping (checkId, checklistId, CheckNumber) VALUES (?, ?, ?)");
	$checksArray = $_POST['listItem'];
	$checkNo = 0;	
	//Loops through and executes the prepared statements with the values
	foreach($checksArray as $arrayItem)
	{
		$checkNo++;
		$stmt->execute(array($arrayItem, $listId, $checkNo));
	}
}
?>
