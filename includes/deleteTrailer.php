<?php
if(isset($_POST['showDesc'])){
   
    include 'connection.php';
			
	$deleteTrailerQuery = "DELETE FROM trailer WHERE Id = '$_POST[viewTrailerIdDelete]'";
	
	if(!mysql_query($deleteTrailerQuery)){
          ///////////////////////
	}
	else{	
            if(mysql_affected_rows() !=0){  	
                echo '
                    <head>
                    <meta http-equiv="refresh" content="0">
                    </head>';
                    header("location: /trailers.php");		 
             }else{
                header("location: /trailers.php");	
            }	  
	}
    }
?>