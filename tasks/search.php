<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search results</title>
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
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>	
	<script type="text/javascript" src="../javaScript.js"></script>	
</head>
<body>	
	<div class="header">
		<h2>Preview search results</h2>
	</div>	
	<form method="post" action="search.php">
		<div class="input-group">
			<p>In this section You could find search results.</p>			
		</div>		
		<div class="input-group">				
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>
			<a href="preview.php"><button type="button" class="btn" name="preview">Preview</button></a>
		</div>			
	</form>
		
	<!----------BOOK TABLE---------->
	<div class="header">
		<h2>Books table content</h2>		
	</div>	
	<table>
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
		<?php $i = 1; while ($row = mysqli_fetch_array($resultBook)) { ?>
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
	<!----------FILE TABLE---------->
	<div class="header">
		<h2>Files table content</h2>		
	</div>	
	<table>
		<thead>			
			<tr>
				<th>Nr.</th>				
				<th>File name</th>
				<th>Description</th>				
				<th>Format</th>
				<th>Storage type</th>
			</tr>
		</thead>
		<tbody>
		<?php $i = 1; while ($row = mysqli_fetch_array($resultFile)) { ?>
			<tr>
				<td class="number"><?php echo $i; ?></td>				
				<td class="file"><?php echo $row['title']; ?></td>
				<td class="description"><?php echo $row['description']; ?></td>				
				<td class="format"><?php echo $row['format']; ?></td>
				<td class="storageType"><?php echo $row['storage_type']; ?></td>							
			</tr>			
		<?php $i++;} ?>			
		</tbody>
	</table>	
	<!----------GAME TABLE---------->
	<div class="header">
		<h2>Games table content</h2>		
	</div>	
	<table>
		<thead>			
			<tr>
				<th>Nr.</th>				
				<th>Game name</th>
				<th>Year</th>
				<th>Storage type</th>						
			</tr>
		</thead>
		<tbody>
		<?php $i = 1; while ($row = mysqli_fetch_array($resultGame)) { ?>
			<tr>
				<td class="number"><?php echo $i; ?></td>				
				<td class="game"><?php echo $row['game_name']; ?></td>
				<td class="year"><?php echo $row['year']; ?></td>
				<td class="storageType"><?php echo $row['storage_type']; ?></td>								
			</tr>			
		<?php $i++;} ?>			
		</tbody>
	</table>	
	<!----------MOVIE TABLE---------->
	<div class="header">
		<h2>Movies table content</h2>		
	</div>	
	<table>
		<thead>			
			<tr>
				<th>Nr.</th>				
				<th>Movie title</th>
				<th>Year</th>
				<th>Language</th>
				<th>Type</th>
				<th>Storage type</th>
			</tr>
		</thead>
		<tbody>
		<?php $i = 1; while ($row = mysqli_fetch_array($resultMovie)) { ?>
			<tr>
				<td class="number"><?php echo $i; ?></td>				
				<td class="movie"><?php echo $row['movie_title']; ?></td>
				<td class="year"><?php echo $row['year']; ?></td>
				<td class="language"><?php echo $row['language']; ?></td>
				<td class="type"><?php echo $row['type']; ?></td>
				<td class="storageType"><?php echo $row['storage_type']; ?></td>						
			</tr>			
		<?php $i++;} ?>			
		</tbody>
	</table>	
	<!----------MUSIC TABLE---------->
	<div class="header">
		<h2>Music table content</h2>		
	</div>	
	<table>
		<thead>			
			<tr>
				<th>Nr.</th>	
				<th>Artist</th>				
				<th>Song name</th>
				<th>Album</th>
				<th>Format</th>
				<th>Year</th>
				<th>Storage type</th>
			</tr>
		</thead>
		<tbody>
		<?php $i = 1; while ($row = mysqli_fetch_array($resultMusic)) { ?>
			<tr>
				<td class="number"><?php echo $i; ?></td>							
				<td class="artist"><?php echo $row['artist']; ?></td>				
				<td class="song_name"><?php echo $row['song_name']; ?></td>
				<td class="album"><?php echo $row['album']; ?></td>
				<td class="format"><?php echo $row['format']; ?></td>
				<td class="year"><?php echo $row['year']; ?></td>
				<td class="storageType"><?php echo $row['storage_type']; ?></td>							
			</tr>			
		<?php $i++;} ?>			
		</tbody>
	</table>	
	<!----------PHOTO TABLE---------->
	<div class="header">
		<h2>Photos table content</h2>		
	</div>	
	<table>
		<thead>			
			<tr>
				<th>Nr.</th>	
				<th>Description</th>				
				<th>Count</th>
				<th>Year</th>
				<th>Storage type</th>
			</tr>
		</thead>
		<tbody>
		<?php $i = 1; while ($row = mysqli_fetch_array($resultPhoto)) { ?>
			<tr>
				<td class="number"><?php echo $i; ?></td>							
				<td class="description"><?php echo $row['description']; ?></td>				
				<td class="count"><?php echo $row['count']; ?></td>
				<td class="year"><?php echo $row['year']; ?></td>
				<td class="storageType"><?php echo $row['storage_type']; ?></td>							
			</tr>			
		<?php $i++;} ?>			
		</tbody>
	</table>	
	<!----------PROGRAM TABLE---------->
	<div class="header">
		<h2>Programs table content</h2>		
	</div>	
	<table>
		<thead>			
			<tr>
				<th>Nr.</th>				
				<th>Program name</th>				
				<th>Creator</th>
				<th>Year</th>
				<th>Storage type</th>
			</tr>
		</thead>
		<tbody>
		<?php $i = 1; while ($row = mysqli_fetch_array($resultProgram)) { ?>
			<tr>
				<td class="number"><?php echo $i; ?></td>				
				<td class="program"><?php echo $row['program_name']; ?></td>
				<td class="creator"><?php echo $row['creator']; ?></td>
				<td class="year"><?php echo $row['year']; ?></td>				
				<td class="storageType"><?php echo $row['storage_type']; ?></td>							
			</tr>			
		<?php $i++;} ?>			
		</tbody>
	</table>	
</body>
</html>