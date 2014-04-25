<?php
//Only run of a username has been given
if(isset($_POST['driver']))
{	
        $con = mysql_connect("localhost", "root", "");
	if(!$con)
	{
		die('Could not connect to database!: ' . mysql_error());
	}
        mysql_select_db("checkit", $con);
	
        
        if(empty($_POST['Registration'])){
      
            $createDriver = "INSERT into user(Username)Values
            ('$_POST[driver]')";   
            if(!mysql_query($createDriver, $con))
            {
		die('Error ' . mysql_error());
            }	
            //return to drivers page with updated info.
            header("location: /drivers.php");
        }    
        else{
            $createDriver = "INSERT into user(Username, VehicleId)VALUES
            ('$_POST[driver]','$_POST[Registration]')";
	
            //Error checking
            if(!mysql_query($createDriver, $con))
            {
		die('Error ' . mysql_error());
            }	
            //return to drivers page with updated info.
            header("location: /drivers.php");
        }
}
?>