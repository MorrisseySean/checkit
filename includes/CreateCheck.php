<?php
	 
    include 'connection.php';
     // use "filter_input" instead of $_POST, as $_POST can be a security issue 
    $Desc = filter_input(INPUT_POST, "Description"); 
    $TypeId = filter_input(INPUT_POST, "TypeId");
           
    $createCheck = $db->prepare("INSERT into checks(Description, TypeId)
    VALUES
    ('$Desc', '$TypeId')");
   	
    try{
        $createCheck->execute(array($Desc,$TypeId));    
        header("location: /checks.php");
    }
    catch(PDOException $e){
        echo errorHandle($e);
    }
?>
