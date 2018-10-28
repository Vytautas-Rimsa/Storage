<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Book editor</title>
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
		<h2>Book editor</h2>
	</div>
	
	<form method="post" action="edit_book.php">	
		<div class="input-group">
			<label>Title of the Book</label>
			<input class="book" type="text" name="newBookTitle" value="<?php echo $row[1]; ?>" >
			<input class="book" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>		
		<div class="input-group">
			<label>Author of the Book</label>
			<input class="author" type="text" name="newAuthor" value="<?php echo $row[2]; ?>" >
			<input class="author" type="hidden" name="id" value="<?php echo $row[0]; ?>" >			
		</div>
		<div class="input-group">
			<label>Type</label>
			<select name="newBookType" id="type" value="<?php echo $row[3]; ?>">
				<option value=""></option>
				<option value="apologize">Apysaka</option>
				<option value="article">Article</option>
				<option value="book">Book</option>
				<option value="comics">Comics</option>
				<option value="magazine">Magazine</option>
			</select>
		</div>
		<div class="input-group">
			<label>Language</label>
			<select name="newBookLanguage" id="language" value="<?php echo $row[4]; ?>">
				<option value=""></option>
				<option value="ENG">English</option>				
				<option value="LT">Lithuanian</option>
				<option value="RUS">Russian</option>
			</select>
		</div>
		<div class="input-group">
			<label>Year</label>
			<input class="year" type="number" name="newBookYear" min="1980" max="2100" value="<?php echo $row[5]; ?>">
			<input class="year" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>	
		<div class="input-group">
			<label>Format</label>
			<select name="newBookFormat" id="format" value="<?php echo $row[6]; ?>">
				<option value=""></option>
				<option value="pdf">epub</option>
				<option value="pdf">pdf</option>
				<option value="word">word</option>
			</select>
		</div>
		<div class="input-group">
			<label>Storage Type</label>
			<select name="newStorageType" id="storage_type" value="<?php echo $row[7]; ?>">
				<option value=""></option>
				<option value="Samsung WHITE">Samsung White</option>
				<option value="Samsung BLACK">Samsung Black</option>
			</select>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="update_book">Update book</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
			<a href="preview.php"><button type="button" class="btn" name="preview">Preview</button></a>
		</div>		
	</form>
	
</body>
</html>