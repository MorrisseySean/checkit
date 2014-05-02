<?php
if(isset($_POST['Code'])) //if the hidden input called confirm was set to yes then allow the information to be put into the database
{
    if($_POST['confirm']=="yes"){
        
        include 'connection.php';
        
        $createTrailer ="INSERT INTO trailer(Code)
        VALUES
        ('$_POST[Code]')";
        
        if(!mysql_query($createTrailer)){
          //  die('Error ' . mysql_error());
	}
	//return to checks page with updated info
	header("location: /trailers.php");
    }
}
?>