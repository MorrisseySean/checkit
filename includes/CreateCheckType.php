<!-- The following php code will have an sql query called "createCheckType" that will insert the necessary values -->
<?php
if(isset($_POST['Id'])) // /checks if the form has been submitted by checking one posted variable to see if it exists, if it does exist then the form has been submitted
{	
     if($_POST['confirm'] == "yes"){ //if the hidden input called confirm was set to yes then allow the information to be put into the database
        include 'Connection.php';

        $createCheckType = "INSERT INTO checktype(code)
        VALUES
        ('$_POST[code]')";
		
        if(!mysql_query($createCheckType)){
            die('Error ' . mysql_error());
	}
	//return to checks page with updated info
	header("location: /checks.php");
	
     }
     else{
       header("location: /checks.php");
     }
}
?>	
<!--end php-->