<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter the Book</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleRButtons.css">
	<style>
		.header {
			background: #663300;
		}
		button[name=register_btn] {
			background: #003366;
		}
		#bookb{background: #663300;}
	</style>
</head>
<body>
	<div class="header">
		<h2>Enter the Book</h2>
	</div>
	
	<form method="post" action="enter_book.php">	
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Tile of the Book</label>
			<input type="text" name="title" value="<?php echo $title; ?>">
		</div>
		<div class="input-group">
			<label>Author of the Book</label>
			<input type="text" name="author" value="<?php echo $author; ?>">
		</div>
		<div class="input-group">
			<label>Type</label>
			<select name="type" id="type" >
				<option value=""></option>
				<option value="apologize">Apologize</option>
				<option value="article">Article</option>
				<option value="book">Book</option>
				<option value="comics">Comics</option>
				<option value="magazine">Magazine</option>
			</select>
		</div>
		<div class="input-group">
			<label>Language</label>
			<select name="language" id="language" >
				<option value=""></option>
				<option value="ENG">English</option>				
				<option value="LT">Lithuanian</option>
				<option value="RUS">Russian</option>
			</select>
		</div>		
		<div class="input-group">
			<label>Year</label>
			<input type="number" name="year" min="1900" max="2100" id="year" value="<?php echo $year; ?>">
		</div>
		<div class="input-group">
			<label>Format</label>
			<select name="format" id="format" >
				<option value=""></option>
				<option value="epub">epub</option>
				<option value="pdf">pdf</option>
				<option value="word">word</option>
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
			<button type="submit" class="btn" id="bookb" name="save_book_btn">Save record</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
		</div>				
	</form>	
	
</body>
</html>