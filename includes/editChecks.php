<?php
   
    include 'connection.php';
    // use "filter_input" instead of $_POST, as $_POST can be a security issue 
    $Desc = filter_input(INPUT_POST, "showDescr");
    $TypeId = filter_input(INPUT_POST, "viewCheckTypeIdEdit"); 
    $Id = filter_input(INPUT_POST, "viewCheckIdEdit");
        
    // Create a update check sql statement 
    $editCheck = $db->prepare("UPDATE checks SET Description = :Desc, TypeId = :TypeId WHERE Id = :Id AND TypeId = :TypeId");
    
    // bindValue binds a value to a parameter
    $editCheck->bindValue(':Desc', $Desc, PDO::PARAM_STR); 
    $editCheck->bindValue(':TypeId', $TypeId, PDO::PARAM_STR); 
    $editCheck->bindValue(':Id', $Id, PDO::PARAM_STR); 
    
     try{
        $editCheck->execute();    
        header("location: /checks.php"); // return to checks page
     }
     catch(PDOException $e){
        echo errorHandle($e);
     }

?>