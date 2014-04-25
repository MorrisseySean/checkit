<!-- 	Author:		Matthew Dalton
		Number; 	C0096264		Date Written: 
	
-->
<?php
    include 'Connection.php';

    $findCheck = mysql_query("SELECT checks.TypeId, checks.Id, checks.Description, checktype.Code FROM checktype INNER JOIN checks ON checks.TypeId=checktype.Id
    ORDER BY checktype.code");
	
        
    while($row = mysql_fetch_array($findCheck)){
		
        $checkTypeId = $row['TypeId'];
	$checkId = $row['Id'];
        $checkDesc = $row['Description'];
	$checkTypeCode = $row['Code'];
                
	$allText="$checkTypeId,$checkId,$checkDesc,$checkTypeCode";
			
	echo "<optgroup label = " . $checkTypeCode . " >";
            echo "<option value = '$allText' > $checkDesc </option>";
                echo "</optgroup>";                   
	}
	echo "</select>";

?>