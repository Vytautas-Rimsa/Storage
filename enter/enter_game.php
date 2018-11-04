<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter the Game</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleRButtons.css">
	<style>
		.header {
			background: #CC0000;
		}
		button[name=register_btn] {
			background: #003366;
		}
		#gameb{background: #CC0000;}
	</style>
</head>
<body>
	<div class="header">
		<h2>Enter the Game</h2>
	</div>
	
	<form method="post" action="enter_game.php">	
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Title of the Game</label>
			<input type="text" name="game_name" value="<?php echo $game_name; ?>">
		</div>
		<div class="input-group">
			<label>Year</label>
			<input type="number" name="year" min="1980" max="2100" id="year" value="<?php echo $year; ?>">
		</div>		
		<div class="input-group">
			<label>Storage Type</label>
			<select name="storage_type" id="storage_type">
				<option value=""></option>
				<option value="Samsung WHITE">Samsung White</option>
				<option value="Samsung BLACK">Samsung Black</option>
			</select>
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" id="gameb" name="save_game_btn">Save record</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
		</div>					
	</form>	
	
</body>
</html>