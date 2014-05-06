<?php
if(isset($_POST['Code'])) //if the hidden input called confirm was set to yes then allow the information to be put into the database
{
    if($_POST['confirm']=="yes"){
        
        include 'connection.php';
        $trailerDesc = $_POST['Code'];
        
        $createTrailer = $db->prepare("INSERT INTO trailer(Code)
        VALUES
        (?)");

        try{
            $createTrailer->execute();    
            header("location: /checks.php");
        }
        catch(PDOException $e){
            echo errorHandle($e);
        }
    }
}
?>