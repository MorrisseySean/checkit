<!DOCTYPE html>
<html lang ="en">
    <head>
        <!-- Linked (External) style sheet -->
        <link rel ="stylesheet" type = "text/css" href = "static/formStyleCheck.css">
        <link rel ="stylesheet" type = "text/css" href = "static/stylesheet.css">


        <script type = "text/javascript" src="/static/formscripts.js"></script> 
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    </head>
	<?php include('includes/header.php'); ?>
	<?php include('includes/navbar.php'); ?>
	<?php include('includes/overlay.php'); ?>
    <body>
            <div id="container">	
                <?php include('includes/checkSideMenu.php'); ?>
                <div id="content" class="extendright">
                    <table>
                    <tr>
			<th>Check Description</th>
			<th>Check Type</th>
			<th>Select</th>
                    </tr>
                    <?php include 'includes/findChecks.php'; ?>
                    </table>   
		</div>
            </div>
		<!--Content placed here appears in the overlay created by the create button-->
                <div id ="createcheckType" class ="overlay-box-createType">
                    <div class="overlay-content-createType">	
                        <div id="my-form" class ="myform">	
                            <form method ="POST" action ="includes/CreateCheckType.php" onsubmit  ="confirmCheck()">
                            <input type ="hidden" name ="confirm" id ="confirm"> <!-- Will allow information to be passed to the database, sets to "no" or "yes" depending on the confirmation answer from the "confirmCheck()" function -->
                          
                                <table class ="null-content" cellpadding ="1" cellspacing ="15" >
                                <tr>
                                    <th>Check Type</th>   
                                </tr>
                                <tr>
                                    <td><label>Enter Type:</label>
                                    <div class ="line-separator"></div>
                                    <textarea rows ="6" cols ="40" placeholder ="Please enter a description!" name ="code" id ="code" ></textarea>
                                   
                                    </td>
                                </tr>								
                                </table>	 
                                <button id ="buttonA" type ="submit" name ="Confirm">Save</button>
                                <button id ="buttonB" type ="reset" name ="cancel">Cancel</button>
                            </form>					
                        </div>
                   </div>
		</div>
                <div id ="createcheck" class ="overlay-box-create">
                    <div class="overlay-content-create">
                       <div id ="my-form" class= "myform">	
                        <form method ="POST" action ="includes/CreateCheck.php">
                         <input type ="hidden" name ="confirm" id ="confirm"> <!-- Will allow information to be passed to the database, sets to "no" or "yes" depending on the confirmation answer from the "confirmCheck" function -->
                            <table class ="null-content" cellpadding ="2" cellspacing ="5" >
				<tr>
                                    <th>Create Check</th>
                                </tr>
				<tr>    
                                    <td><label>Select Check-Type:</label>
                                    <div class ="line-separator"></div>
                                    <td><select name = 'TypeId' id = 'TypeId' >
                                    <?php include 'includes/findCheckType.php';?> <!-- this php call will help populate the list in the findCheckType function -->
                                    </td>
				</tr>								
				<tr>
                                    <td>
                                    <label> Enter a Description:</label>
                                    <textarea rows ="4" cols ="40"  name ="Description" id ="Description" ></textarea>
                                    </td>
                                </tr>																				
                            </table>	
                            <button id ="buttonA" type ="submit" name ="Confirm">Save</button>
                            <button id ="buttonB" type ="reset" name ="cancel">Cancel</button>
			</form>
                       </div>
                    </div>
		</div>
		<!--Content here appears in the overlay created by the edit button-->
		<div id ="editcheck" class ="overlay-box-edit">
                    <div class ="overlay-content-edit">
                        <div id ="my-form" class ="myform">	
                            <form method = "POST" name = "editForm" action = "includes/editChecks.php">
                                <table class ="null-content" cellpadding ="1" cellspacing ="15">
                                <tr>
                                    <th>Re-edit Check</th>
                                </tr>                           
                                <tr>
                                    <td><label>Description:</label>
                                    <div class ="line-separator"></div>
                                    <input type = "hidden" name = "viewCheckIdEdit" id = "viewCheckIdEdit" />
                                    <input type = "hidden" name = "viewCheckTypeIdEdit" id = "viewCheckTypeIdEdit" />
                                    <textarea  rows="6" cols ="40"  placeholder="Please enter a description!" name ="showDescr" id ="showDescEdit"></textarea>  
                                    </td>
                                </tr>	
                                </table>
                                    <button id ="buttonA" type ="submit" name ="Confirm">Save</button>
                                    <button id ="buttonB" type ="reset" name ="cancel">Cancel</button>	
                            </form>
                         </div>
                      </div>
                   </div>
                <div id ="deleteCheck" class="overlay-box-delete">
            <div class ="overlay-content-delete">
            <div id="my-form" class="myform">
		<form method ="POST" action ="includes/deleteCheck.php">                 
                    <table class="null-content" cellpadding ="2" cellspacing="15">
                        <tr>
                            <th> Delete a Check </th>           
                        </tr>
			<tr>                 
                            <td><label> Description: </label>
                            <div class="line-separator"></div>
                            <input type = "hidden" name = "viewCheckIdDelete" id = "viewCheckIdDelete" />
                            <input type = "hidden" name = "viewCheckTypeIdDelete" id = "viewCheckTypeIdDelete" />
                            <textarea rows="6" cols="40"  name = 'showDeleteDesc' id = 'showDescDelete' readonly></textarea>		
                            </td>
                        </tr>		
                    </table>
                        <button id = "buttonA" type = "submit" name = "Confirm">Delete</button>
                        <button id = "buttonB" type = "reset" name = "cancel">Cancel</button>
                </form>
            </div>                
            </div>
            </div>
      
    </body>
</html>