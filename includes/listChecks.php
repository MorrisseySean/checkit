<?php
//Connects to the database and returns a dropdown box containing the known checks correlating to their id.
{
	$connect = mysql_connect("localhost","root","");

	if(!$connect){
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("checkit",$connect);	
	
	$listChecksQuery = mysql_query("SELECT checks.Id, checks.Description FROM checks ORDER BY Description");
	echo "<tr><td><select id = 'listItem[0]'>";
		while($row = mysql_fetch_array($listChecksQuery))
		{
			$checkId = $row['Id'];
			$checkDesc = $row['Description'];			
			echo "<option id = '$checkId' name = 'check' value ='$checkId'>$checkDesc</option>"; // This echo statement will return these variable created above, back to the listbox 
		}
	echo "</select></td></tr>";
	mysql_close($connect);
}
?>