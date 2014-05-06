<?php

if(filter_input(INPUT_POST, "confirm") == "yes"){ //if the hidden input called confirm was set to 'yes' then allow the information to be put into the database
        
    include 'connection.php';
    // use "filter_input" instead of $_POST, as $_POST can be a security issue 
    $vehicleDesc = filter_input(INPUT_POST, "Code");
            
        
    $createVehicle = $db->prepare("INSERT INTO vehicle(Registration)
    VALUES
    ('$vehicleDesc')");

    try{
        $createVehicle->execute(array($vehilceDesc));    
        header("location: /vehicles.php");
    }
    catch(PDOException $e){
        echo errorHandle($e);
    }
}
?>