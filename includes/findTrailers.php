<?php
{
    include 'Connection.php';
    
    $findTrailer = $db->query("SELECT trailer.Id, trailer.Code FROM trailer ORDER BY Id");
    
    echo "<form action = '#' method = 'post' class = 'trailerForm' id = 'trailerEditForm'>";
    
    while($row = $findTrailer->fetch(PDO::FETCH_ASSOC)){
        $trailerId = $row['Id'];
        $trailerCode = $row['Code'];
        $trailerIds = $row['Id'];
        $trailerCodes = $row['Code'];
        
        $allText = "$trailerId,$trailerCode,$trailerIds,$trailerCodes";
        echo "<tr>";
            echo "<td>" .  $trailerId. "</td>";
            echo "<td>" . $trailerCode . "</td>";
            echo "<td><input type='radio' name='trailers' value='$allText'   /></td>";
            echo "<input name = 'trailers' type = 'hidden' value ='0' />"; // set a default value for radio buttons, will allow a value to be posted regardless 
        echo "</tr>"; 
    }  
    echo "<input type='hidden' id ='showDescs' name='showDesc' class='details' />";   
    echo "</form>"; 
 }
 ?>
<html>
<script language="JavaScript"> 
  
    var checkDetails = document.forms['trailerEditForm'].elements['trailers'];
    var result;
    
    for (var i=0, len=checkDetails.length; i<len; i++) {
        
        checkDetails[i].onclick = function() {
            this.form.showDesc.value = this.value;
            x =this.value;
            //document.getElementById("showDesc").innerHTML=x;
        
            result = x.split(',');
            document.getElementById("viewTrailerIdEdit").value = result[0];
            document.getElementById("viewTrailerCodeEdit").value = result[1];
            document.getElementById("viewTrailerIdDelete").value = result[2];
            document.getElementById("viewTrailerCodeDelete").value = result[3];
        };
    }  	
</script>
</html>