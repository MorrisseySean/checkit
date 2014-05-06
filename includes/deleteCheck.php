<?php
if(isset($_POST['showDesc'])){
   
    include 'connection.php';
    $Id = $_POST['viewCheckIdDelete'];
    
// Create a delete check sql statement
    $deleteCheckQuery = $db->prepare("DELETE FROM checks WHERE Id = :Id"); // using name placeholders
    
    // bindValue binds a value to a parameter
    $deleteCheckQuery->bindValue(':Id', $Id, PDO::PARAM_STR); 
    
    try{
       $deleteCheckQuery->execute();
        header("location: /checks.php"); // return to checks page
     }
     catch(PDOException $e){
        echo errorHandle($e);
     }
}
?>