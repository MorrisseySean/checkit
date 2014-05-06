<?php
if(isset(filter_input(INPUT_POST,"showDesc"))){
   
    include 'connection.php';
    // use "filter_input" instead of $_POST, as $_POST can be a security issue 
    $viewTrailerIdDelete = filter_input(INPUT_POST, "viewTrailerIdDelete");
            		
    $deleteTrailerQuery = $db->prepare("DELETE FROM trailer WHERE Id = :viewTrailerIdDelete");
	
    // bindValue binds a value to a parameter
    $deleteTrailerQuery ->bindValue(':viewTrailerIdDelete', $viewTrailerIdDelete, PDO::PARAM_STR); 
    
    try{
       $deleteTrailerQuery->execute();
        header("location: /trailers.php");	
     }
     catch(PDOException $e){
        echo errorHandle($e);
     }
}
?>