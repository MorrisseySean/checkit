<!DOCTYPE html>
<html>
	<?php include('includes/header.php'); ?>
	<?php include('includes/navbar.php'); ?>
	<?php include('includes/overlay.php'); ?>
	<body>
		<div id="container">	
			<?php include('includes/sidemenu.php'); ?>
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
			<div id="createcheck" class="overlay-box-create">
				<div class="overlay-content-create" id="create-form">					
					<form method = "POST" action = "includes/CreateCheck.php">
						<input type = "hidden" name = "confirm" id = "confirm"> <!-- Will allow information to be passed to the database, sets to "no" or "yes" depending on the confirmation answer from the "confirmCheck" function -->
						<table class="null-content">
							<tr><th>Create Check</th></tr>
							<tr>
								<td><label>Select Check-Type:</td>
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
						<input type = "submit" name ="Confirm" value = "Save"></input>	
					</form>					
				</div>
			</div>
			<!--Content here appears in the overlay created by the edit button-->
			<div id "editcheck" class="overlay-box-edit">
				<div class ="overlay-content-edit" id = "input-form">
					<form method = "POST" name = "editForm" action = "includes/editChecks.php">
						<input type = "hidden" name = "confirm" id = "confirm"> <!-- Will allow information to be passed to the database, sets to "no" or "yes" depending on the confirmation answer from the "confirmCheck" function -->
						<table class="null-content">
							<tr><th>Edit Check</th></tr>
							<tr>
								<td><label>Select Check-Type:</td>
								<select name = 'TypeId' id = 'TypeId'>
								<?php include 'includes/findCheckType.php';?> <!-- this php call will help populate the list in the findCheckType function -->							
							</tr>								
							<tr>
								<td>
									</label> Enter a Description:</label>
									<textarea rows="4" cols="40" type = "text" name = 'Description' id = 'Description'> </textarea>
								</td>
							</tr>																				
						</table>
						<input type = "hidden" name ="checkId"></input>
						<input type = "submit" name ="Confirm" onclick="getRadio()" value = "Save"></input>	
					</form>	
				</div>
			</div>
		</div>
	</body>
</html>