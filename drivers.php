<!DOCTYPE html>
<html>
	<?php include('includes/header.php'); ?>
	<?php include('includes/navbar.php'); ?>
	<body>
		<div id="container">	
			<?php include('includes/sidemenu.php'); ?>
			<div id="content" class="extendright">
				<table>
					<tr>
						<th>Username</th>
						<th>Vehicle</th>
						<th>Enabled</th>
						<th>Select</th>
					</tr>
					<?php include 'includes/findDriver.php';?>
				</table>
			</div>		
			<!--Content placed here appears in the overlay created by the create button-->
			<div id="createcheck" class="overlay-box-create">
				<div class="overlay-content-create">					
					<form method = "POST" action = "includes/createDriver.php">
						<input type = "hidden" name = "confirm" id = "confirm"> <!-- Will allow information to be passed to the database, sets to "no" or "yes" depending on the confirmation answer from the "confirmCheck" function -->
						<table class="null-content">
							<tr><th>Create Driver</th></tr>
							<tr>
								<td>
									<label>Select Vehicle:</label>
									<select name = 'Registration' id = 'Registration' >
									<option id="VehicleId" name="VehicleId" value = "">None</option>
									<?php include 'includes/populateVehicleList.php';?> <!-- this php call will help populate the list of vehicle registrations -->
								</td>
							</tr>								
							<tr>
								<td>
									</label> Username:</label>
									<input type = "text" name = 'driver' id = 'driver'></input>
								</td>
							</tr>
							<tr>
								<td></td>
							</tr>
						</table>	
						<input type = "submit" name ="Confirm" value = "Save"></input>
					</form>					
				</div>
			</div>
		</div>
	</body>
</html>