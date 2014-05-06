<!DOCTYPE html>
<html lang ="en"> 
    <head>
        <!-- Linked (External) style sheet -->
        <link rel ="stylesheet" type ="text/css" href ="static/formStyleCheck.css">
        <link rel ="stylesheet" type ="text/css" href ="static/stylesheet.css">
        
        <script type = "text/javascript" src="/static/formscripts.js"></script> 
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
                                            <th>Vehicle Registration</th>
						
                                            <th>Select</th>
					</tr>
                                        <tr>
                                            <?php include 'includes/findVehicles.php';?>
                                        </tr>
				</table>
			</div>
		</div>
            <!--Content placed here appears in the overlay created by the create button-->
            <div id ="createCheck" class ="overlay-box-create"> 
                <div class ="overlay-content-create">
                    <div id ="my-form" class ="myform">
                        <form method ="POST" action ="includes/createVehicle.php" onsubmit ="confirmCheck()">
                            <input type ="hidden" name ="confirm" id ="confirm"> <!-- Will allow information to be passed to the database, sets to "no" or "yes" depending on the confirmation answer from the "confirmCheck()" function -->
                            <table class ="null-content" cellpadding ="2" cellspacing ="15" >
                                <tr>
                                    <th>Create A Vehicle</th>
                                </tr>
                                <tr>
                                    <td><label>Enter A Description:</label>
                                     <div class="line-separator"></div>
                                     <textarea rows="6" cols ="40" placeholder="Please enter a description!" name ="Code" id ="Code"></textarea>
                                    </td>
                                 </tr>
                            </table> 
                                <button id ="buttonA" type ="submit" name ="Confirm">Save</button>
                                <button id ="buttonB" type ="reset" name ="cancel">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Content here appears in the overlay created by the edit button -->
            <div id ="editcheck" class ="overlay-box-edit">
                <div class ="overlay-content-edit">
                    <div id ="my-form" class ="myform">
                        <form method ="POST" name = "editTrailer" action ="includes/editVehicle.php">
                            <table class ="null-content" cellpadding ="1" cellspacing ="15">
                                <tr>
                                    <th>Re-edit Vehicle</th>
                                </tr>
                                <tr>
                                    <td><label>Description:</label>
                                        <div class ="line-separator"></div>
                                        <input type ="hidden" name ="viewVehicleIdEdit" id ="viewVehicleIdEdit" />
                                         <textarea rows="6" cols ="40"  placeholder="Please enter a registration number!" name ="showDescr" id ="viewVehicleCodeEdit"></textarea>
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
                            <form method ="POST" action ="includes/deleteVehicle.php">                 
                              <table class="null-content" cellpadding ="2" cellspacing="15">
                                <tr>
                                    <th> Delete a Vehicle</th>           
                                </tr>
                                <tr>                 
                                    <td><label> Description: </label>
                                    <div class="line-separator"></div>
                                    <input type = "hidden" name = "viewVehilceIdDelete" id = "viewVehicleIdDelete" />
                                    <textarea rows="6" cols="40"  name = 'showDesc' id = 'viewVehicleCodeDelete' readonly></textarea>		
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