<?php
	

        //$connect = mysqli_connect("localhost", "root", "");
        
	//$db_host = new PDO('mysql:host=localhost;dbname=checkit', 'root', '');
	//if(!$connect){
	//	die('Could not connect!: ' . mysql_error());
	//}
	//mysqli_select_db("checkit", $connect);	
        


    $db_host = "localhost"; $db_username = "root"; $db_pass = ""; $db_name = "checkit";
       
    try{
        // Access the MYSQL SERVER
        $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_username,$db_pass); 
        
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);      
    }
    catch(PDOException $e){
        echo "Server Error: " . $e->getCode();
    }     
?>