<?php
if(isset($_POST['showDesc'])){
   
    include 'connection.php';
    
    $viewTrailerIdDelete = $_POST['viewTrailerIdDelete'];
   			
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