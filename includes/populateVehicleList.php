<?php
{
	$connect = mysql_connect("localhost","root","");

	if(!$connect){
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("checkit",$connect);
	

	// Created an sql query called "findCheckTypesQuery" to return the related fields from the checktype table to be used to populate the listbox ad form fields in the CreateCheck.html.php
	
	$findVehicleQuery = mysql_query("SELECT vehicle.Id, vehicle.Registration FROM vehicle");
		
		while($row = mysql_fetch_array($findVehicleQuery))
		{
			$VehicleId = $row['Id'];
			$VehicleReg = $row['Registration'];
			
			echo "<option id = 'VehicleId' name = 'VehicleId' value ='$VehicleId'>$VehicleReg</option>"; // This echo statement will return these variable created above, back to the listbox 
		}
	echo "</select>";
	mysql_close($connect);
}
?>