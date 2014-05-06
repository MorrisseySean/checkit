<?php
{
  include 'Connection.php';
  
  $findVehicle = $db->query("Select vehicle.Id, vehicle.Registration from vehicle ORDER BY Id");
  
  echo "<form action = '#' method = 'post' class = 'vehicleForm' id = 'vehicleEditForm'>";
    
  while($row = $findVehicle->fetch(PDO::FETCH_ASSOC)){
    $vehicleId = $row['Id'];
    $vehicleReg = $row['Registration'];
    
    $allText = "$vehicleId,$vehicleReg";
    
    echo "<tr>";
            echo "<td>" .  $vehicleId . "</td>";
            echo "<td>" . $vehicleReg . "</td>";
            echo "<td><input type='radio' name='vehicles' value='$allText'   /></td>";
            echo "<input name = 'vehicles' type = 'hidden' value ='0' />"; // set 0 as a default value for radio buttons, will allow a value to be posted regardless 
        echo "</tr>"; 
      
  }
  echo "<input type='hidden' id ='showDescs' name='showDesc' class='details' />";   
  echo "</form>"; 
}
?>
<html>
<script language="JavaScript"> 
  
    var vehicleDetails = document.forms['vehicleEditForm'].elements['vehicles'];
    var result;
    
    for (var i=0, len=vehicleDetails.length; i<len; i++) {
        
        vehicleDetails[i].onclick = function() {
            this.form.showDesc.value = this.value;
            x =this.value;
           
            result = x.split(',');
            document.getElementById("viewVehicleIdEdit").value = result[0];
            document.getElementById("viewVehicleCodeEdit").value = result[1];
            document.getElementById("viewVehicleIdDelete").value = result[2];
            document.getElementById("viewVehicleCodeDelete").value = result[3];
        };
    }  	
</script>
</html>