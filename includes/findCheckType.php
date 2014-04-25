<?php
{	
	include 'connection.php';
	
	// Created an sql query called "findCheckTypesQuery" to return the related fields from the checktype table to be used to populate the listbox ad form fields in the CreateCheck.html.php
	
	$findCheckTypeQuery = mysql_query("SELECT checktype.Id, checktype.Code FROM checktype");
		
		while($row = mysql_fetch_array($findCheckTypeQuery))
		{
                    $checkTypeId = $row['Id'];
                    $checkTypeName = $row['Code'];
			
                    echo "<option id = 'TypeId' name = 'TypeId' value ='$checkTypeId'>$checkTypeName</option>"; // This echo statement will return these variable created above, back to the listbox 
		}
	echo "</select>";
	mysql_close($connect);
}
?>