<?php

 if(filter_input(INPUT_POST, "confirm") == "yes"){ //if the hidden input called confirm was set to 'yes' then allow the information to be put into the database
        
    include 'Connection.php';
    // use "filter_input" instead of $_POST, as $_POST can be a security issue 
    $code = filter_input(INPUT_POST, "code");
                
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

?>	
