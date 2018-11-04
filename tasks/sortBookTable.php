<?php include('../functions.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Sorting books</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/styleRButtons.css">	
	<style>
		.header {
			background: #003366;
		}
		.headerSorting {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>	
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>	
	<script type="text/javascript" src="../javaScript.js"></script>	
</head>
<body>	
	<div class="header">
		<h2>Preview Book Table content</h2>
	</div>	
	<form method="post" action="sortBookTable.php">
		<div class="input-group">
			<p>In this section You will be able to sort Book Table in various ways</p>			
		</div>		
		<div class="input-group">				
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>&nbsp;&nbsp;
			<a href="preview.php"><button type="button" class="btn" name="preview">Preview</button></a>			
		</div>
		<div class="input-group">				
			<input type="text" name="search" id="search">
			<a href="search.php"><button type="submit" class="btn" name="search" value="Filter">Search</button></a>
		</div>				
	
		<div class="headerSorting">
			<h2>Sort Books Table content by</h2>
			<p>
				<button class="showButton">Number</button>&nbsp;&nbsp;
				<button class="showButton">Book Title</button>&nbsp;&nbsp;
				<button class="showButton">Author</button>&nbsp;&nbsp;			
				<button class="showButton">Type</button><br>	
				<button class="showButton">Language</button>&nbsp;&nbsp;
				<button class="showButton">Year</button>&nbsp;&nbsp;
				<button class="showButton">Format</button>&nbsp;&nbsp;			
				<button class="showButton">Storage type</button>			
			</p>
		</div>
		<div class="sortTable">
			<table class="tableInForm">
				<thead>			
					<tr class="collapse">
						<th>Nr.</th>				
						<th>Book title</th>
						<th>Author</th>
						<th>Type</th>
						<th>Language</th>
						<th>Year</th>
						<th>Format</th>
						<th>Storage type</th>						
					</tr>
				</thead>
				<tbody>
				<?php $i = 1; while ($row = mysqli_fetch_array($books)) { ?>
					<tr class="collapse">
						<td class="number"><?php echo $i; ?></td>				
						<td class="book"><?php echo $row['title']; ?></td>
						<td class="author"><?php echo $row['author']; ?></td>
						<td class="type"><?php echo $row['type']; ?></td>
						<td class="language"><?php echo $row['language']; ?></td>
						<td class="year"><?php echo $row['year']; ?></td>
						<td class="format"><?php echo $row['format']; ?></td>
						<td class="storageType"><?php echo $row['storage_type']; ?></td>									
					</tr>			
				<?php $i++;} ?>			
				</tbody>
			</table>
		</div>
	</form>		
</body>
</html>