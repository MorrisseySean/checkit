<?php
if(isset($_POST['Description']))
{	
    include 'connection.php';
    $Desc = $_POST['Description'];
    $TypeId = $_POST['TypeId'];
    
    $createCheck = $db->prepare("INSERT into checks(Description, TypeId)
    VALUES
   (?), (?)");
   	
    try{
        $createCheck->execute($array($Desc,$TypeId));    
        header("location: /checks.php");
    }
    catch(PDOException $e){
        echo errorHandle($e);
    }
}
?>
