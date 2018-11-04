<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Storage content</title>
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
		<h2>Preview storage content</h2>
	</div>	
	<form method="post" action="search.php">
		<div class="input-group">
			<p>In this section You could see all the written data in the Storage database. <br>You will find six different tables with unique content. 
			You will be able to Edit or even Delete each tables data. <br>Of course, there will be several search functions.</p>			
		</div>		
		<div class="input-group">				
			<a href="../storage.php"><button type="button" class="btn" name="home">Home</button></a>&nbsp;&nbsp;
			<button type="button" class="btn showTables" name="home">Show tables</button>&nbsp;&nbsp;
			<button type="button" class="btn hideTables" name="home">Hide tables</button>
		</div>
		<div class="input-group">				
			<input type="text" name="searchWord" id="search">
			<a href="search.php"><button type="submit" class="btn" name="search" value="Filter">Search</button></a>
		</div>		
	</form>		
	<!----------BOOK TABLE---------->
	<div class="header">
		<h2>Books table content</h2>
		<p>
			<button class="showbook">Show table</button>&nbsp;&nbsp;
			<button class="hidebook">Hide table</button>&nbsp;&nbsp;
			<a href="sortBookTable.php"><button class="showbook">Sort table</button></a>
		</p>
	</div>
	<div class="divtablebook">
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
					<th></th>
					<th></th>		
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
					<td class="edit">
						<a href="edit_book.php?edit_book=<?php echo $row['id']; ?>">Edit</a>					
					</td>
					<td class="delete">
						<a href="preview.php?del_book=<?php echo $row['id']; ?>">Delete</a>
					</td>				
				</tr>			
			<?php $i++;} ?>			
			</tbody>
		</table>
	</div>
	<!----------FILE TABLE---------->
	<div class="header">
		<h2>Files table content</h2>
		<p>
			<button class="showfile">Show table</button>&nbsp;&nbsp;
			<button class="hidefile">Hide table</button>			
		</p>
	</div>
	<div class="divtablefile">
		<table>
			<thead>			
				<tr>
					<th>Nr.</th>				
					<th>File name</th>
					<th>Description</th>				
					<th>Format</th>
					<th>Storage type</th>
					<th></th>
					<th></th>		
				</tr>
			</thead>
			<tbody>
			<?php $i = 1; while ($row = mysqli_fetch_array($files)) { ?>
				<tr>
					<td class="number"><?php echo $i; ?></td>				
					<td class="file"><?php echo $row['title']; ?></td>
					<td class="description"><?php echo $row['description']; ?></td>				
					<td class="format"><?php echo $row['format']; ?></td>
					<td class="storageType"><?php echo $row['storage_type']; ?></td>
					<td class="edit">
						<a href="edit_file.php?edit_file=<?php echo $row['id']; ?>">Edit</a>					
					</td>
					<td class="delete">
						<a href="preview.php?del_file=<?php echo $row['id']; ?>">Delete</a>
					</td>				
				</tr>			
			<?php $i++;} ?>			
			</tbody>
		</table>
	</div>
	<!----------GAME TABLE---------->
	<div class="header">
		<h2>Games table content</h2>
		<p>
			<button class="showgame">Show table</button>&nbsp;&nbsp;
			<button class="hidegame">Hide table</button>&nbsp;&nbsp;
			<a href="sortGameTable.php"><button class="showbook">Sort table</button></a>			
		</p>
	</div>
	<div class="divtablegame">
		<table>
			<thead>			
				<tr>
					<th>Nr.</th>				
					<th>Game name</th>
					<th>Year</th>
					<th>Storage type</th>
					<th></th>
					<th></th>		
				</tr>
			</thead>
			<tbody>
			<?php $i = 1; while ($row = mysqli_fetch_array($games)) { ?>
				<tr>
					<td class="number"><?php echo $i; ?></td>				
					<td class="game"><?php echo $row['game_name']; ?></td>
					<td class="year"><?php echo $row['year']; ?></td>
					<td class="storageType"><?php echo $row['storage_type']; ?></td>
					<td class="edit">
						<a href="edit_game.php?edit_game=<?php echo $row['id']; ?>">Edit</a>					
					</td>
					<td class="delete">
						<a href="preview.php?del_game=<?php echo $row['id']; ?>">Delete</a>
					</td>				
				</tr>			
			<?php $i++;} ?>			
			</tbody>
		</table>
	</div>
	<!----------MOVIE TABLE---------->
	<div class="header">
		<h2>Movies table content</h2>
		<p>
			<button class="showmovie">Show table</button>&nbsp;&nbsp;
			<button class="hidemovie">Hide table</button>			
		</p>
	</div>
	<div class="divtablemovie">
		<table>
			<thead>			
				<tr>
					<th>Nr.</th>				
					<th>Movie title</th>
					<th>Year</th>
					<th>Language</th>
					<th>Type</th>
					<th>Storage type</th>
					<th></th>
					<th></th>		
				</tr>
			</thead>
			<tbody>
			<?php $i = 1; while ($row = mysqli_fetch_array($movies)) { ?>
				<tr>
					<td class="number"><?php echo $i; ?></td>				
					<td class="movie"><?php echo $row['movie_title']; ?></td>
					<td class="year"><?php echo $row['year']; ?></td>
					<td class="language"><?php echo $row['language']; ?></td>
					<td class="type"><?php echo $row['type']; ?></td>
					<td class="storageType"><?php echo $row['storage_type']; ?></td>
					<td class="edit">
						<a href="edit_movie.php?edit_movie=<?php echo $row['id']; ?>">Edit</a>					
					</td>
					<td class="delete">
						<a href="preview.php?del_movie=<?php echo $row['id']; ?>">Delete</a>
					</td>				
				</tr>			
			<?php $i++;} ?>			
			</tbody>
		</table>
	</div>
	<!----------MUSIC TABLE---------->
	<div class="header">
		<h2>Music table content</h2>
		<p>
			<button class="showmusic">Show table</button>&nbsp;&nbsp;
			<button class="hidemusic">Hide table</button>			
		</p>
	</div>
	<div class="divtablemusic">
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
					<th></th>
					<th></th>		
				</tr>
			</thead>
			<tbody>
			<?php $i = 1; while ($row = mysqli_fetch_array($musics)) { ?>
				<tr>
					<td class="number"><?php echo $i; ?></td>							
					<td class="artist"><?php echo $row['artist']; ?></td>				
					<td class="song_name"><?php echo $row['song_name']; ?></td>
					<td class="album"><?php echo $row['album']; ?></td>
					<td class="format"><?php echo $row['format']; ?></td>
					<td class="year"><?php echo $row['year']; ?></td>
					<td class="storageType"><?php echo $row['storage_type']; ?></td>
					<td class="edit">
						<a href="edit_music.php?edit_music=<?php echo $row['id']; ?>">Edit</a>					
					</td>
					<td class="delete">
						<a href="preview.php?del_music=<?php echo $row['id']; ?>">Delete</a>
					</td>				
				</tr>			
			<?php $i++;} ?>			
			</tbody>
		</table>
	</div>
	<!----------PHOTO TABLE---------->
	<div class="header">
		<h2>Photos table content</h2>
		<p>
			<button class="showphoto">Show table</button>&nbsp;&nbsp;
			<button class="hidephoto">Hide table</button>			
		</p>
	</div>
	<div class="divtablephoto">
		<table>
			<thead>			
				<tr>
					<th>Nr.</th>	
					<th>Description</th>				
					<th>Count</th>
					<th>Year</th>
					<th>Storage type</th>
					<th></th>
					<th></th>		
				</tr>
			</thead>
			<tbody>
			<?php $i = 1; while ($row = mysqli_fetch_array($photos)) { ?>
				<tr>
					<td class="number"><?php echo $i; ?></td>							
					<td class="description"><?php echo $row['description']; ?></td>				
					<td class="count"><?php echo $row['count']; ?></td>
					<td class="year"><?php echo $row['year']; ?></td>
					<td class="storageType"><?php echo $row['storage_type']; ?></td>
					<td class="edit">
						<a href="edit_photo.php?edit_photo=<?php echo $row['id']; ?>">Edit</a>					
					</td>
					<td class="delete">
						<a href="preview.php?del_photo=<?php echo $row['id']; ?>">Delete</a>
					</td>				
				</tr>			
			<?php $i++;} ?>			
			</tbody>
		</table>
	</div>
	<!----------PROGRAM TABLE---------->
	<div class="header">
		<h2>Programs table content</h2>
		<p>
			<button class="showprogram">Show table</button>&nbsp;&nbsp;
			<button class="hideprogram">Hide table</button>			
		</p>
	</div>
	<div class="divtableprogram">
		<table>
			<thead>			
				<tr>
					<th>Nr.</th>				
					<th>Program name</th>				
					<th>Creator</th>
					<th>Year</th>
					<th>Storage type</th>
					<th></th>
					<th></th>		
				</tr>
			</thead>
			<tbody>
			<?php $i = 1; while ($row = mysqli_fetch_array($programs)) { ?>
				<tr>
					<td class="number"><?php echo $i; ?></td>				
					<td class="program"><?php echo $row['program_name']; ?></td>
					<td class="creator"><?php echo $row['creator']; ?></td>
					<td class="year"><?php echo $row['year']; ?></td>				
					<td class="storageType"><?php echo $row['storage_type']; ?></td>
					<td class="edit">
						<a href="edit_program.php?edit_program=<?php echo $row['id']; ?>">Edit</a>					
					</td>
					<td class="delete">
						<a href="preview.php?del_program=<?php echo $row['id']; ?>">Delete</a>
					</td>				
				</tr>			
			<?php $i++;} ?>			
			</tbody>
		</table>
	</div>
</body>
</html>