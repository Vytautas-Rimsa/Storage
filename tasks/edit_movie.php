<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Movie editor</title>
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
		<h2>Movie editor</h2>
	</div>
	
	<form method="post" action="edit_movie.php">	
		<div class="input-group">
			<label>Title of the Movie</label>
			<input class="movie" type="text" name="newMovieTitle" value="<?php echo $row[1]; ?>" >
			<input class="movie" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>		
		<div class="input-group">
			<label>Year</label>
			<input class="year" type="number" name="newMovieYear" min="1980" max="2100" value="<?php echo $row[2]; ?>">
			<input class="year" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>
		<div class="input-group">
			<label>Language</label>
			<select name="newMovieLanguage" id="language" value="<?php echo $row[3]; ?>">
				<option value=""></option>
				<option value="ENG">English</option>
				<option value="JAP">Japanese</option>
				<option value="LT">Lithuanian</option>
				<option value="MULTI">Multi</option>
				<option value="RUS">Russian</option>
			</select>
		</div>
		<div class="input-group">
			<label>Type</label>
			<select name="newMovieType" id="type" value="<?php echo $row[4]; ?>">
				<option value=""></option>				
				<option value="anime">Anime</option>
				<option value="cartoon">Cartoon</option>
				<option value="movie">Movie</option>
			</select>
		</div>
		<div class="input-group">
			<label>Storage Type</label>
			<select name="newStorageType" id="storage_type" value="<?php echo $row[5]; ?>">
				<option value=""></option>
				<option value="Samsung WHITE">Samsung White</option>
				<option value="Samsung BLACK">Samsung Black</option>
			</select>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="update_movie">Update movie</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
			<a href="preview.php"><button type="button" class="btn" name="preview">Preview</button></a>
		</div>		
	</form>
	
</body>
</html>