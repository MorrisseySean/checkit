<?php
if(isset($_POST['showDescr']))
{	    
    include 'connection.php';
	
    $editTrailer = "UPDATE trailer SET Code = '$_POST[showDescr]', Id = '$_POST[viewTrailerIdEdit]' WHERE Id = '$_POST[viewTrailerIdEdit]'";

    if(!mysql_query($editTrailer)){
		//die('Error ' . mysql_error());
    }
    //return to checks page with updated info
    header("location: /trailers.php");
}
?>