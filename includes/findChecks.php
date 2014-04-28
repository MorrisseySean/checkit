<!-- 	Author:		Matthew Dalton
		Number; 	C0096264		Date Written: 
	
-->
<?php
    include 'Connection.php';

    $findCheck = mysql_query("SELECT checks.TypeId, checks.Id, checks.Description, checktype.Code FROM checktype INNER JOIN checks ON checks.TypeId=checktype.Id
    ORDER BY checktype.code");	
        
    while($row = mysql_fetch_array($findCheck))
	{		
        $checkTypeId = $row['TypeId'];
		$checkId = $row['Id'];
        $checkDesc = $row['Description'];
		$checkTypeCode = $row['Code'];        
		$allText="$checkTypeId,$checkId,$checkDesc,$checkTypeCode";
			
		echo "<tr>";
		echo "<td>" . $checkDesc . "</td>";
		echo "<td>" . $checkTypeCode . "</td>";
		echo "<td><input id=$checkId name='selection' type='radio' value='Edit'/></td>";
		echo "</tr>"; // This echo statement will return these variable created above, back to the listbox                  
	}
	echo "</select>";

?>