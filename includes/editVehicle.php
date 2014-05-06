<?php
if(isset(filter_input(INPUT_POST,"showDescr")))
{	    
    include 'connection.php';
    // use "filter_input" instead of $_POST, as $_POST can be a security issue 
    $trailerId = filter_input(INPUT_POST, "viewVehicleIdEdit");
    $trailerDesc = filter_input(INPUT_POST, "showDescr");
            
    // Create a update check sql statement 
    $editTrailer = $db->prepare("UPDATE vehicle SET Registration = :trailerDesc, Id  = :trailerId  WHERE Id = :trailerId ");
    
    // bindValue binds a value to a parameter
    $editTrailer->bindValue(':trailerDesc', $trailerDesc, PDO::PARAM_STR); 
    $editTrailer->bindValue(':trailerId', $trailerId , PDO::PARAM_STR); 
    
    try{
        $editTrailer->execute();    
        header("location: /vehicles.php"); // return to checks page
     }
     catch(PDOException $e){
        echo errorHandle($e);
     }
}
?>