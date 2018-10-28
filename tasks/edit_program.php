<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Program editor</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleRButtons.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Game editor</h2>
	</div>
	
	<form method="post" action="edit_program.php">	
		<div class="input-group">
			<label>Name of the Program</label>
			<input class="program" type="text" name="newProgramName" value="<?php echo $row[1]; ?>" >
			<input class="program" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>
		<div class="input-group">
			<label>Creator</label>
			<input class="creator" type="text" name="newProgramCreator" value="<?php echo $row[3]; ?>">
			<input class="creator" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>
		<div class="input-group">
			<label>Year</label>
			<input class="year" type="number" name="newProgramYear" min="1980" max="2100" value="<?php echo $row[2]; ?>">
			<input class="year" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>		
		<div class="input-group">
			<label>Storage Type</label>
			<select name="newStorageType" id="storage_type" value="<?php echo $row[4]; ?>">
				<option value=""></option>
				<option value="Samsung WHITE">Samsung White</option>
				<option value="Samsung BLACK">Samsung Black</option>
			</select>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="update_program">Update record</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
			<a href="preview.php"><button type="button" class="btn" name="preview">Preview</button></a>
		</div>		
	</form>
	
</body>
</html>