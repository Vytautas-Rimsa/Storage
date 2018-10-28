<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Music editor</title>
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
		<h2>Music editor</h2>
	</div>
	
	<form method="post" action="edit_book.php">	
		<div class="input-group">
			<label>Artist of the Song</label>
			<input class="artist" type="text" name="newMusicArtist" value="<?php echo $row[1]; ?>" >
			<input class="artist" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>
		<div class="input-group">
			<label>Song's name</label>
			<input class="song_name" type="text" name="newSongName" value="<?php echo $row[2]; ?>" >
			<input class="song_name" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>
		<div class="input-group">
			<label>Album</label>
			<input class="album" type="text" name="newMusicAlbum" value="<?php echo $row[3]; ?>" >
			<input class="album" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>
		<div class="input-group">
			<label>Format</label>
			<select name="newMusicFormat" id="format" value="<?php echo $row[4]; ?>">
				<option value=""></option>
				<option value="flac">FLAC</option>
				<option value="mp3">MP3</option>				
			</select>
		</div>		
		<div class="input-group">
			<label>Year</label>
			<input class="year" type="number" name="newMusicYear" min="1980" max="2100" value="<?php echo $row[5]; ?>">
			<input class="year" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>			
		<div class="input-group">
			<label>Storage Type</label>
			<select name="newStorageType" id="storage_type" value="<?php echo $row[6]; ?>">
				<option value=""></option>
				<option value="Samsung WHITE">Samsung White</option>
				<option value="Samsung BLACK">Samsung Black</option>
			</select>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="update_music">Update music</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
			<a href="preview.php"><button type="button" class="btn" name="preview">Preview</button></a>
		</div>		
	</form>
	
</body>
</html>