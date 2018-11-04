<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter the Program</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleRButtons.css">
	<style>
		.header {
			background: #CCCC00;
		}
		button[name=register_btn] {
			background: #003366;
		}
		#programb{background: #CCCC00;}
	</style>
</head>
<body>
	<div class="header">
		<h2>Enter the Program</h2>
	</div>
	
	<form method="post" action="enter_program.php">	
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Name of the Program</label>
			<input type="text" name="program_name" value="<?php echo $program_name; ?>">
		</div>
		<div class="input-group">
			<label>Creator</label>
			<input type="text" name="creator" value="<?php echo $creator; ?>">
		</div>
		<div class="input-group">
			<label>Year</label>
			<input type="number" name="year" min="1920" max="2100" id="year" value="<?php echo $year; ?>">
		</div>			
		<div class="input-group">
			<label>Storage Type</label>
			<select name="storage_type" id="storage_type" >
				<option value=""></option>
				<option value="Samsung WHITE">Samsung White</option>
				<option value="Samsung BLACK">Samsung Black</option>
			</select>
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" id="programb" name="save_program_btn">Save record</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>			
		</div>				
	</form>	
	
</body>
</html>