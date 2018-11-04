<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter the Photo</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleRButtons.css">
	<style>
		.header {
			background: #6600CC;
		}
		button[name=register_btn] {
			background: #003366;
		}
		#photob{background: #6600CC;}
	</style>
</head>
<body>
	<div class="header">
		<h2>Enter the Photo</h2>
	</div>
	
	<form method="post" action="enter_photo.php">	
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Description of the Photos</label>
			<input type="text" name="description" value="<?php echo $description; ?>">
		</div>
		<div class="input-group">
			<label>Count</label>
			<input type="number" name="count" min="1" max="10000" id="count"value="<?php echo $count; ?>">
		</div>
		<div class="input-group">
			<label>Year</label>
			<input type="number" name="year" min="1980" max="2100" id="year" value="<?php echo $year; ?>">
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
			<button type="submit" class="btn" id="photob" name="save_photo_btn">Save record</button>	
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
		</div>				
	</form>	
	
</body>
</html>