<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Game editor</title>
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
	
	<form method="post" action="edit_game.php">	
		<div class="input-group">
			<label>Title of the Game</label>
			<input class="game" type="text" name="newGameName" value="<?php echo $row[1]; ?>" >
			<input class="game" type="hidden" name="id" value="<?php echo $row[0]; ?>" >			
		</div>
		<div class="input-group">
			<label>Year</label>
			<input class="year" type="number" name="newGameYear" min="1980" max="2100" value="<?php echo $row[2]; ?>">
			<input class="year" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>		
		<div class="input-group">
			<label>Storage Type</label>
			<select name="newStorageType" id="storage_type" value="<?php echo $row[3]; ?>">
				<option value=""></option>
				<option value="Samsung WHITE">Samsung White</option>
				<option value="Samsung BLACK">Samsung Black</option>
			</select>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="update_game">Update record</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
			<a href="preview.php"><button type="button" class="btn" name="preview">Preview</button></a>
		</div>		
	</form>
	
</body>
</html>