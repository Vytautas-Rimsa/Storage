<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter the Movie</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleRButtons.css">
	<style>
		.header {
			background: #0066CC;
		}
		button[name=register_btn] {
			background: #003366;
		}
		#movieb{background: #0066CC;}
	</style>
</head>
<body>
	<div class="header">
		<h2>Enter the Movie</h2>
	</div>
	
	<form method="post" action="enter_movie.php">	
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Title of the Movie</label>
			<input type="text" name="movie_title" value="<?php echo $movie_title; ?>">
		</div>
		<div class="input-group">
			<label>Year</label>
			<input type="number" name="year" min="1920" max="2100" value="<?php echo $year; ?>">
		</div>
		<div class="input-group">
			<label>Language</label>
			<select name="language" id="language" >
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
			<select name="type" id="type" >
				<option value=""></option>				
				<option value="anime">Anime</option>
				<option value="cartoon">Cartoon</option>
				<option value="movie">Movie</option>
			</select>
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
			<button type="submit" class="btn" id="movieb" name="save_movie_btn">Save record</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>			
		</div>					
	</form>
	
</body>
</html>