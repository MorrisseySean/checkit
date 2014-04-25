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
						<th>Vehicle Registration</th>
						<th>Assigned Checklist</th>
						<th>Select</th>
					</tr>
					<?php include 'includes/findVehicle.php';?>
				</table>
			</div>
		</div>
	</body>
</html>