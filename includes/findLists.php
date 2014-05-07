<?php
	//Find and return the names and ids of the checklists in a table format
	include 'connection.php';
	$stmt = $db->prepare("SELECT checklist.Name, checklist.Id FROM checklist");
	if($stmt->execute())
	{
		echo "<table class='table-layout'>";
		echo "<tr><th>Checklist</th><th>Select</th></tr>";
		while($row =$stmt->fetch(PDO::FETCH_ASSOC))
		{
			echo "<tr>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td id='radio-select'><input type='radio' name='listSelect' value=" . $row['Id'] . "/></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
?>