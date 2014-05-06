<?php
if(isset($_POST['showDescr']))
{	    
    include 'connection.php';
    $trailerId = $_POST['viewTrailerIdEdit'];
    $trailerDesc = $_POST['showDescr'];
    
    // Create a update check sql statement 
    $editTrailer = $db->prepare("UPDATE trailer SET Code = :trailerDesc, trailerId  = :trailerId  WHERE Id = :trailerId ");
    
    // bindValue binds a value to a parameter
    $editTrailer->bindValue(':trailerDesc', $trailerDesc, PDO::PARAM_STR); 
    $editTrailer->bindValue(':trailerId', $trailerId , PDO::PARAM_STR); 
    
    try{
        $editTrailer->execute();    
        header("location: /trailers.php"); // return to checks page
     }
     catch(PDOException $e){
        echo errorHandle($e);
     }
}
?>