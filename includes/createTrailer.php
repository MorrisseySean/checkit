<?php

if(filter_input(INPUT_POST, "confirm") == "yes"){ //if the hidden input called confirm was set to 'yes' then allow the information to be put into the database
        
    include 'connection.php';
    $trailerDesc =  filter_input(INPUT_POST, "Code");
        
    $createTrailer = $db->prepare("INSERT INTO trailer(Code)
    VALUES
    ('$trailerDesc')");

    try{
        $createTrailer->execute(array($trailerDesc));    
        header("location: /trailers.php");
    }
    catch(PDOException $e){
        echo errorHandle($e);
    }
 }
?>