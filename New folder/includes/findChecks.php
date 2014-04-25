<?php
{
	$connect = mysql_connect("localhost","root","");

	if(!$connect){
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("checkit",$connect);
	

	// Created an sql query called "findCheckTypesQuery" to return the related fields from the checktype table to be used to populate the listbox ad form fields in the CreateCheck.html.php
	
	$findCheckQuery = mysql_query("SELECT checks.Description, checks.Id, checktype.Code FROM checks, checktype WHERE checks.TypeId = checktype.Id");
		
		while($row = mysql_fetch_array($findCheckQuery))
		{
			$checkDescription = $row['Description'];
			$checkType = $row['Code'];
			$checkId = $row['Id'];
			$allText="$checkDescription,$checkType";
			
			echo "<tr>";
			echo "<td>" . $checkDescription . "</td>";
			echo "<td>" . $checkType . "</td>";
			echo "<td><input id=$checkId name='selection' type='radio' value='Edit'/></td>";
			echo "</tr>"; // This echo statement will return these variable created above, back to the listbox 
		}
	echo "</select>";
	mysql_close($connect);
}
?>