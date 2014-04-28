<!DOCTYPE html>
<html>
	<?php include('includes/header.php'); ?>
	<?php include('includes/navbar.php'); ?>
	<script type="text/javascript" src="/static/addListField.js"></script>
	<body>
		<div id="container">	
			<?php include('includes/sidemenu.php'); ?>
			<div id="content" class="extendright">
			</div>
			<div id="create" class="overlay-box-create">
				<div id ="createcontent" class="overlay-content-create">
					<form method = "POST" action = "includes/savelist.php">
						<table id="input-table" class ="null-content">								
							<tr><th>Create Checklist</th></tr>
							<tr><td>Checklist Name:<input type="text" name="listName" id="listName"/></td></tr>
							<tr><td><center><input type = "button" id="add-new" value="Add Check"/>
							<input type = "submit" value = "Save"></input></center></td></tr>
							<?php include('includes/listChecks.php');?>							
						</table>
					</form>
				</div>
			</div>			
		</div>
	</body>
</html>