<?php
{
	$connect = mysql_connect("localhost","root","");

	if(!$connect){
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("checkit",$connect);
	

	// Created an sql query called "findDriver" to return the related fields from the driver table to be used to populate the listbox and form fields in the driver.php page
	
	$findDriverQuery = mysql_query("SELECT user.Id, user.Username, vehicle.Registration, user.Enabled FROM user, vehicle WHERE user.VehicleId = vehicle.Id");
		
	while($row = mysql_fetch_array($findDriverQuery))
	{
		$driverId = $row['Id'];
		$driverUsername = $row['Username'];
		$driverReg = $row['Registration'];
		$driverEnabled = $row['Enabled'];
		$allText="$driverUsername,$driverReg, $driverEnabled";
		
		echo "<tr>";
		echo "<td>" . $driverUsername . "</td>";
		echo "<td>" . $driverReg . "</td>";
		if($driverEnabled = 1)
		{
			echo "<td>True</td>";
		}
		else
		{
			echo "<td>False</td>";
		}
		echo "<td><input name='driverSelect' value= $driverId type='radio'/></td>";
		echo "</tr>"; // This echo statement will return these variable created above, back to the listbox 
	}
	echo "</select>";
	mysql_close($connect);
}
?>