<!DOCTYPE html>
<html>
<head>
<!-- Linked (External) style sheet -->
<link rel ="stylesheet" type = "text/css" href = "static/formStyleCheck.css">
<link rel ="stylesheet" type = "text/css" href = "static/stylesheet.css">
<script type = "text/javascript" src="/static/formscripts.js"></script> 

<meta charset="UTF-8">
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
			<!--Content placed here appears in the overlay created by the create button-->
			<div id="createcheckType" class="overlay-box-createType">
				<div class="overlay-content-createType">	
					<div id="my-form" class="myform">	
						<form method = "POST" action = "includes/CreateCheckType.php" onsubmit  = "confirmCheck()">
						<input type = "hidden" name = "confirm" id = "confirm"> <!-- Will allow information to be passed to the database, sets to "no" or "yes" depending on the confirmation answer from the "confirmCheck()" function -->
							<table class="null-content" cellpadding ="1" cellspacing="15" >
								<tr>
									<th>Check Type</th>   
								</tr>
								<tr>
									<td><label>Enter Type:</label>
									<div class="line-separator"></div>
									<textarea rows="6" cols="40" placeholder = "Please enter description" name = "code" id = "code" required></textarea>
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
			<div id="createcheck" class="overlay-box-create">
				<div class="overlay-content-create">
					<div id="my-form" class="myform">	
						<form method = "POST" action = "includes/CreateCheck.php">
							<input type = "hidden" name = "confirm" id = "confirm"> <!-- Will allow information to be passed to the database, sets to "no" or "yes" depending on the confirmation answer from the "confirmCheck" function -->
							<table class="null-content" cellpadding ="3" cellspacing="15" >
								<tr>
									<th>Create Check</th>
								</tr>
								<tr>    
									<td><label>Select Check-Type:</label>
									<div class="line-separator"></div>
									<td><select name = 'TypeId' id = 'TypeId' >
									<?php include 'includes/findCheckType.php';?> <!-- this php call will help populate the list in the findCheckType function -->
									</td>
								</tr>								
								<tr>
									<td>
									</label> Enter a Description:</label>
									<textarea rows="4" cols="40" type = "text" name = 'Description' id = 'Description'> </textarea>
									</td>
								</tr>																				
							</table>	
							<button id ="button" type ="submit" name ="Confirm">Save</button>
							<button id ="button" type ="reset" name ="cancel">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		<!--Content here appears in the overlay created by the edit button-->
		<div id ="editcheck" class="overlay-box-edit">
		<div class ="overlay-content-edit">
		<div id="my-form" class="myform">	
                    <form method = "POST" name = "editForm" action = "includes/editChecks.php">
                    
                        <table class="null-content" cellpadding ="1" cellspacing="15">
			<tr>
                            <th>Edit Check</th>
                           
			</tr>
			<tr>
                            <td><label>Select Check:</label>
                            <div class="line-separator"></div>
                            <td><select  name = 'findEditDetails' id = 'findEditDetails' onclick = 'populateEditDetails()' >
                            <?php include 'includes/listChecks.php';?>
                            <input type = "hidden" name = "viewTypeIds" id = "viewTypeIds" />
                            <input type = "hidden" name = "viewIds" id = "viewIds" />
                                     
                            </td>	
                        </tr>
                        <tr>
                            <td><label> Description: </label>
                            <textarea  id ="viewDescs" name ="viewDescs"  rows="6" cols="40" >
                            </textarea>
                            </td>
                        </tr>	
                    </table>
          
			<button id = "button" type = "submit" name ="Confirm">Save</button>
			<button id = "button" type = "reset" name = "cancel">Cancel</button>	
                    </form>
            </div>
            </div>
            </div>
            <div id ="deleteCheck" class="overlay-box-delete">
            <div class ="overlay-content-delete">
            <div id="my-form" class="myform">
		<form method ="POST" action ="includes/deleteCheck.php">
                             
                    <table class="null-content" cellpadding ="1" cellspacing="15">
                        <tr>
                            <th> Delete a Check </th>
                           
                        </tr>
                        <tr>
                            <td><label> Select Check: </label>
                             <div class="line-separator"></div>
                            <td><select name = 'findDetails' id = 'findDetails' onclick = 'populateDetails()' >
                             <?php include 'includes/findChecks.php';?>
                            <input type = "hidden" name = "viewTypeId" id = "viewTypeId" />
                            <input type = "hidden" name = "viewId" id = "viewId" />
                    
                        </tr>
			<tr>
                            <td><label> Description: </label>
                            <textarea rows="6" cols="40"  name = 'viewDesc' id = 'viewDesc'></textarea>		
                            </td>
                        </tr>		
                    </table>
                        <button id = "button" type = "submit" name = "Confirm">Delete</button>
                        <button id = "button" type = "reset" name = "cancel">Cancel</button>
                </form>
            </div>                
            </div>
            </div>
        </div>
	</body>
</html>