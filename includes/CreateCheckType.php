<!-- The following php code will have an sql query called "createCheckType" that will insert the necessary values -->
<?php
if(isset($_POST['code'])) // /checks if the form has been submitted by checking one posted variable to see if it exists, if it does exist then the form has been submitted
{	
     if($_POST['confirm'] == "yes"){ //if the hidden input called confirm was set to 'yes' then allow the information to be put into the database
        
        include 'Connection.php';
        $code = $_POST['code'];
        
        $createCheckType = $db->prepare("INSERT INTO checktype(code)
        VALUES
        (?)");
        
        try{  
            $createCheckType->execute(array($code));
            header("location: /checks.php");
        }
        catch(PDOException $e){
            echo errorHandle($e);
        }
    }
}
?>	
