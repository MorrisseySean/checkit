<?php
if(isset($_POST['showDesc'])){
   
    include 'connection.php';
			
	$deleteCheckQuery = "DELETE FROM checks WHERE Id = '$_POST[viewCheckIdDelete]'";
	
	if(!mysql_query($deleteCheckQuery)){
            echo "Error". mysql_error();
	}
	else{	
		if(mysql_affected_rows() !=0){
         /*  echo '
		<script type = "text/javascript">
                    popWin = window.open("deleteCheckSuccess.html.php", "null", "width=260,height=250,status=no,menubar=no,titlebar=no,scrollbars=no,location=no,resizable=no");
                    popWin.moveTo(100,80);        
                </script>';		
		*/		
            echo '
                <head>
                    <meta http-equiv="refresh" content="0">
		</head>';
		header("location: /checks.php");		 
       }	  
	}
    }
   
?>