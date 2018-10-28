<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Enter the File</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleRButtons.css">
	<style>
		.header {
			background: #009900;
		}
		button[name=register_btn] {
			background: #003366;
		}
		#fileb{background: #009900;}
	</style>
</head>
<body>
	<div class="header">
		<h2>Enter the File</h2>
	</div>
	
	<form method="post" action="enter_file.php">	
		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Title of the File</label>
			<input type="text" name="title" value="<?php echo $title; ?>">
		</div>
		<div class="input-group">
			<label>Short description</label>
			<input type="text" name="description" value="<?php echo $description; ?>">
		</div>
		<div class="input-group">
			<label>Format</label>
			<select name="format" id="format" >
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
			<select name="storage_type" id="storage_type" >
				<option value=""></option>
				<option value="Samsung WHITE">Samsung White</option>
				<option value="Samsung BLACK">Samsung Black</option>
			</select>
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" id="fileb" name="save_file_btn">Save record</button>
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
		</div>				
	</form>	
	
</body>
</html>