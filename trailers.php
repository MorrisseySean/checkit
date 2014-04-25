<!DOCTYPE html>
<html lang ="en">
    <head>
    <!-- Linked (External) style sheet -->
    <link rel ="stylesheet" type ="text/css" href ="static/formStyleCheck.css">
    <link rel ="stylesheet" type ="text/css" href ="static/stylesheet.css">

    <script type ="text/javascript" src ="static/formscripts.js"></script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    </head>
	<?php include('includes/header.php'); ?>
	<?php include('includes/navbar.php'); ?>
        <?php include('includes/overlay.php'); ?>
    <body>
		<div id="container">	
		<?php include('includes/sidemenu.php'); ?>
                    <div id="content" class="extendright">
				<table>
					<tr>
						<th>Trailer ID</th>
						<th>Option 2</th>
						<th>Select</th>
					</tr>
					<tr>
						<td>230745875H</td>
						<td>Example Option</td>
						<td><input type="checkbox"/></td>
					</tr>
				</table>
			</div>
		</div>
        
               <div id="createTrailer" class="overlay-box-create">
                    <div class="overlay-content-create">	
                        <div id="my-form" class="myform">	
                            <form method ="POST" action ="includes/CreateTrailer.php" onsubmit ="confirmCheck()">
                            <input type ="hidden" name ="confirm" id ="confirm"> <!-- Will allow information to be passed to the database, sets to "no" or "yes" depending on the confirmation answer from the "confirmCheck()" function -->
                          
                                <table class="null-content" cellpadding ="1" cellspacing="15" >
                                    <tr>
                                        <th>Create A Trailer</th>   
                                    </tr>
                                    <tr>
                                        <td><label>Enter A Description:</label>
                                        <div class="line-separator"></div>
                                        <textarea rows="6" cols="40" placeholder = "Please enter a description!" name = "Code" id = "Code"></textarea>
                                        <input type = "hidden" name = "Id" id = "Id">
                                        </td>
                                    </tr>								
                                </table>	 
                                <button id ="button" type ="submit" name ="Confirm">Save</button>
                                <button id ="button" type ="reset" name ="cancel">Cancel</button>
                           </form>					
                        </div>
                    </div>
		</div>
                  
               
	</body>
</html>