<?php
if(isset($_POST['Code'])) //if the hidden input called confirm was set to yes then allow the information to be put into the database
{
    if($_POST['confirm']=="yes"){
        include 'connection.php';
        
        $createTrailer ="INSERT INTO trailer(
    }
}
?>