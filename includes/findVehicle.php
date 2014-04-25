<?php
{
	$connect = mysql_connect("localhost","root","");

	if(!$connect){
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("checkit",$connect);
	

	// Created an sql query called "findDriver" to return the related fields from the driver table to be used to populate the listbox and form fields in the driver.php page
	
	$findVehicleQuery = mysql_query("SELECT vehicle.Id, vehicle.Registration, checklist.Name FROM vehicle LEFT JOIN checklist ON vehicle.ChecklistId =checklist.Id OR vehicle.ChecklistId IS NULL");
		
	while($row = mysql_fetch_array($findVehicleQuery))
	{
		$vehicleId = $row['Id'];
		$vehicleReg = $row['Registration'];
		$checklistName = $row['Name'];
		$allText="$vehicleId,$vehicleReg, $checklistName";
		
		echo "<tr>";
		echo "<td>" . $vehicleReg . "</td>";
		echo "<td>" . $checklistName. "</td>";
		echo "<td><input id= $vehicleId type='checkbox'/></td>";
		echo "</tr>"; // This echo statement will return these variable created above, back to the listbox 
	}
	echo "</select>";
	mysql_close($connect);
}
?>