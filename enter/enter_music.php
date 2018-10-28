<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter the Song</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleRButtons.css">
	<style>
		.header {
			background: #FF8000;
		}
		button[name=register_btn] {
			background: #003366;
		}
		#musicb{background: #FF8000;}
	</style>
</head>
<body>
	<div class="header">
		<h2>Enter the Song</h2>
	</div>
	
	<form method="post" action="enter_music.php">	
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Artist</label>
			<input type="text" name="artist" value="<?php echo $artist; ?>">
		</div>
		<div class="input-group">
			<label>Song's name</label>
			<input type="text" name="song_name" value="<?php echo $song_name; ?>">
		</div>
		<div class="input-group">
			<label>Album</label>
			<input type="text" name="album" value="<?php echo $album; ?>">
		</div>
		<div class="input-group">
			<label>Format</label>
			<select name="format" id="format" >
				<option value=""></option>
				<option value="flac">FLAC</option>
				<option value="mp3">MP3</option>				
			</select>
		</div>			
		<div class="input-group">
			<label>Year</label>
			<input type="number" name="year" min="1900" max="2100" value="<?php echo $year; ?>">
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
			<button type="submit" class="btn" id="musicb" name="save_music_btn">Save record</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
		</div>				
	</form>	
	
</body>
</html>