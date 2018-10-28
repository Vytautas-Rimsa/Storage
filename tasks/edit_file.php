<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>File editor</title>
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
		<h2>File editor</h2>
	</div>
	
	<form method="post" action="edit_file.php">	
		<div class="input-group">
			<label>Title of the File</label>
			<input class="file" type="text" name="newFileTitle" value="<?php echo $row[1]; ?>" >
			<input class="file" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>
		<div class="input-group">
			<label>Short description</label>
			<input class="description" type="text" name="newFileDescription" value="<?php echo $row[2]; ?>">
			<input class="description" type="hidden" name="id" value="<?php echo $row[0]; ?>" >
		</div>			
		<div class="input-group">
			<label>Format</label>
			<select name="newFileFormat" id="format" value="<?php echo $row[3]; ?>">
				<option value=""></option>
				<option value="c++">c++</option>				
				<option value="c#">c#</option>
				<option value="css">css</option>
				<option value="exel">exel</option>
				<option value="html">html</option>
				<option value="java">java</option>
				<option value="javascript">javascript</option>
				<option value="pdf">pdf</option>
				<option value="psd">psd</option>
				<option value="word">word</option>
			</select>
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
			<button type="submit" class="btn" name="update_file">Update file</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
			<a href="preview.php"><button type="button" class="btn" name="preview">Preview</button></a>
		</div>		
	</form>
	
</body>
</html>