<?php 
	
	// prisijungimas prie duomenu bazes
	$con = mysqli_connect('localhost', 'root', '', 'storage');
	
	if(!$con){
		echo 'Not connected to Server';
	}	
	
	// kintamieji
	$album="";
	$artist="";
	$author="";
	$count="";
	$creator="";
	$description="";
	$errors   = array();
	$format="";
	$game_name ="";
	$language="";
	$movie_title="";
	$program_name="";
	$song_name="";
	$storage_type="";
	$title="";
	$type="";
	$year="";	
		
	if (isset($_POST['save_game_btn'])){
		enterGame();
	}

	if (isset($_POST['save_movie_btn'])){
		enterMovie();
	}
	
	if (isset($_POST['save_program_btn'])){
		enterProgram();
	}
	
	if (isset($_POST['save_file_btn'])){
		enterFile();
	}
	if (isset($_POST['save_photo_btn'])){
		enterPhoto();
	}
	if (isset($_POST['save_book_btn'])){
		enterBook();
	}
	
	if (isset($_POST['save_music_btn'])){
		enterMusic();
	}
	
	function enterGame(){
		global $con, $errors;

		// gaunam uzpildytos formos duomenis
		$game_name    =  e($_POST['game_name']);
		$year       =  e($_POST['year']);
		$storage_type  =  e($_POST['storage_type']);		

		// patikrinam ar forma teisingai uzpildyta
		if (empty($game_name)) { 
			array_push($errors, "The Name of the Game was not entered"); 
		}
		if (empty($year)) { 
			array_push($errors, "The Year of the Game was not entered"); 
		}
		if (empty($storage_type)) { 
			array_push($errors, "The Storage was not selected"); 
		}		

		// jei pildant forma nebuvo klaidu, registruojamas vartotojas
		if (count($errors) == 0) {		
			$query = "INSERT INTO game (game_name, year, storage_type) 
					VALUES ('$game_name', '$year', '$storage_type')";
			mysqli_query($con, $query);			
			header('location: enter_game.php');			
		}
	}
	
	function enterMovie(){
		global $con, $errors;

		// gaunam uzpildytos formos duomenis
		$movie_title    =  e($_POST['movie_title']);
		$year       =  e($_POST['year']);		
		$language	= e($_POST['language']);
		$type		= e($_POST['type']);
		$storage_type  =  e($_POST['storage_type']);
		
		// patikrinam ar forma teisingai uzpildyta
		if (empty($movie_title)) { 
			array_push($errors, "The Title of the Movie was not entered"); 
		}
		if (empty($year)) { 
			array_push($errors, "The Year of the Movie was not entered"); 
		}		
		if (empty($language)) { 
			array_push($errors, "The Language was not selected"); 
		}
		if (empty($type)) { 
			array_push($errors, "The Type was not selected"); 
		}
		if (empty($storage_type)) { 
			array_push($errors, "The Storage was not selected"); 
		}

		// jei pildant forma nebuvo klaidu, registruojamas vartotojas
		if (count($errors) == 0) {		
			$query = "INSERT INTO movie (movie_title, year, language, type, storage_type) 
					VALUES ('$movie_title', '$year', '$language', '$type', '$storage_type')";
			mysqli_query($con, $query);			
			header('location: enter_movie.php');			
		}
	}
	
	function enterProgram(){
		global $con, $errors;

		// gaunam uzpildytos formos duomenis
		$program_name    =  e($_POST['program_name']);
		$creator		= e($_POST['creator']);
		$year       =  e($_POST['year']);
		$storage_type  =  e($_POST['storage_type']);		

		// patikrinam ar forma teisingai uzpildyta
		if (empty($program_name)) { 
			array_push($errors, "The Name of the Program was not entered"); 
		}
		if (empty($year)) { 
			array_push($errors, "The Year of the Program was not entered"); 
		}
		if (empty($creator)) { 
			array_push($errors, "The Creator of the Program was not entered"); 
		}
		if (empty($storage_type)) { 
			array_push($errors, "The Storage was not selected"); 
		}	

		// jei pildant forma nebuvo klaidu, registruojamas vartotojas
		if (count($errors) == 0) {		
			$query = "INSERT INTO program (program_name, year, creator, storage_type) 
					VALUES ('$program_name', '$year', '$creator', '$storage_type')";
			mysqli_query($con, $query);			
			header('location: enter_program.php');			
		}
	}
	
	function enterFile(){
		global $con, $errors;

		// gaunam uzpildytos formos duomenis
		$title    =  e($_POST['title']);
		$description = e($_POST['description']);
		$format		= e($_POST['format']);		
		$storage_type  =  e($_POST['storage_type']);		

		// patikrinam ar forma teisingai uzpildyta
		if (empty($title)) { 
			array_push($errors, "The Title of the File was not entered"); 
		}
		if (empty($description)) { 
			array_push($errors, "The description of the File was not entered"); 
		}
		if (empty($format)) { 
			array_push($errors, "The Format of the File was not entered"); 
		}		
		if (empty($storage_type)) { 
			array_push($errors, "The Storage was not selected"); 
		}	

		// jei pildant forma nebuvo klaidu, registruojamas vartotojas
		if (count($errors) == 0) {		
			$query = "INSERT INTO file (title, description, format, storage_type) 
					VALUES ('$title', '$description', '$format', '$storage_type')";
			mysqli_query($con, $query);			
			header('location: enter_file.php');			
		}
	}
	
	function enterPhoto(){
		global $con, $errors;

		// gaunam uzpildytos formos duomenis		
		$description = e($_POST['description']);
		$count		= e($_POST['count']);		
		$year		= e($_POST['year']);
		$storage_type  =  e($_POST['storage_type']);		

		// patikrinam ar forma teisingai uzpildyta
		if (empty($description)) { 
			array_push($errors, "The description of the Photos was not entered"); 
		}
		if (empty($count)) { 
			array_push($errors, "The Count of the Photos was not entered"); 
		}
		if (empty($year)) { 
			array_push($errors, "The Year of the Photos was not entered"); 
		}		
		if (empty($storage_type)) { 
			array_push($errors, "The Storage was not selected"); 
		}	

		// jei pildant forma nebuvo klaidu, registruojamas vartotojas
		if (count($errors) == 0) {		
			$query = "INSERT INTO photo (description, count, year, storage_type) 
					VALUES ('$description', '$count', '$year', '$storage_type')";
			mysqli_query($con, $query);			
			header('location: enter_photo.php');			
		}
	}
	
	function enterBook(){
		global $con, $errors;

		// gaunam uzpildytos formos duomenis
		$title    =  e($_POST['title']);
		$author    =  e($_POST['author']);
		$type = e($_POST['type']);
		$language = e($_POST['language']);
		$year = e($_POST['year']);
		$format		= e($_POST['format']);		
		$storage_type  =  e($_POST['storage_type']);		

		// patikrinam ar forma teisingai uzpildyta
		if (empty($title)) { 
			array_push($errors, "The Title of the Book was not entered"); 
		}
		if (empty($author)) { 
			array_push($errors, "The Author of the Book was not entered"); 
		}
		if (empty($type)) { 
			array_push($errors, "The Type of the Book was not entered"); 
		}
		if (empty($language)) { 
			array_push($errors, "The Language was not selected"); 
		}
		if (empty($year)) { 
			array_push($errors, "The Year of the Book was not entered"); 
		}
		if (empty($format)) { 
			array_push($errors, "The Format of the Book was not entered"); 
		}		
		if (empty($storage_type)) { 
			array_push($errors, "The Storage was not selected"); 
		}	

		// jei pildant forma nebuvo klaidu, registruojamas vartotojas
		if (count($errors) == 0) {		
			$query = "INSERT INTO book (title, author, type, language, year, format, storage_type) 
					VALUES ('$title', '$author', '$type', '$language', '$year', '$format', '$storage_type')";
			mysqli_query($con, $query);			
			header('location: enter_book.php');			
		}
	}
	
	function enterMusic(){
		global $con, $errors;

		// gaunam uzpildytos formos duomenis
		$artist    =  e($_POST['artist']);
		$song_name    =  e($_POST['song_name']);
		$album = e($_POST['album']);
		$format		= e($_POST['format']);			
		$year = e($_POST['year']);				
		$storage_type  =  e($_POST['storage_type']);		

		// patikrinam ar forma teisingai uzpildyta
		if (empty($artist)) { 
			array_push($errors, "The Artist of the Song was not entered"); 
		}
		if (empty($song_name)) { 
			array_push($errors, "The Song name was not entered"); 
		}
		if (empty($album)) { 
			array_push($errors, "The Album of the Song was not entered"); 
		}
		if (empty($format)) { 
			array_push($errors, "The Format of the Song was not entered"); 
		}
		if (empty($year)) { 
			array_push($errors, "The Year of the Song was not entered"); 
		}				
		if (empty($storage_type)) { 
			array_push($errors, "The Storage was not selected"); 
		}	

		// jei pildant forma nebuvo klaidu, registruojamas vartotojas
		if (count($errors) == 0) {		
			$query = "INSERT INTO music (artist, song_name, album, format, year, storage_type) 
					VALUES ('$artist', '$song_name', '$album', '$format', '$year', '$storage_type')";
			mysqli_query($con, $query);			
			header('location: enter_music.php');			
		}
	}
	
	$books = mysqli_query($con, "SELECT * FROM book");
	$files = mysqli_query($con, "SELECT * FROM file");
	$games = mysqli_query($con, "SELECT * FROM game");
	$movies = mysqli_query($con, "SELECT * FROM movie");
	$musics = mysqli_query($con, "SELECT * FROM music");
	$photos = mysqli_query($con, "SELECT * FROM photo");
	$programs = mysqli_query($con, "SELECT * FROM program");
	
	// deleting table content	
	if (isset($_GET['del_book'])){
		$id = $_GET['del_book'];
		mysqli_query($con, "DELETE FROM book WHERE id=$id");
		header('location: preview.php');
	}
	
	if (isset($_GET['del_file'])){
		$id = $_GET['del_file'];
		mysqli_query($con, "DELETE FROM file WHERE id=$id");
		header('location: preview.php');
	}
	
	if (isset($_GET['del_game'])){
		$id = $_GET['del_game'];
		mysqli_query($con, "DELETE FROM game WHERE id=$id");
		header('location: preview.php');
	}
	
	if (isset($_GET['del_movie'])){
		$id = $_GET['del_movie'];
		mysqli_query($con, "DELETE FROM movie WHERE id=$id");
		header('location: preview.php');
	}
	
	if (isset($_GET['del_music'])){
		$id = $_GET['del_music'];
		mysqli_query($con, "DELETE FROM music WHERE id=$id");
		header('location: preview.php');
	}
	
	if (isset($_GET['del_photo'])){
		$id = $_GET['del_photo'];
		mysqli_query($con, "DELETE FROM photo WHERE id=$id");
		header('location: preview.php');
	}
	
	if (isset($_GET['del_program'])){
		$id = $_GET['del_program'];
		mysqli_query($con, "DELETE FROM program WHERE id=$id");
		header('location: preview.php');
	}
	//---------------------Editing tables content----------------------------------------//
	if (isset($_GET['edit_game'])){
		$id=$_GET['edit_game'];
		$res=mysqli_query($con, "SELECT * FROM game WHERE id=$id");
		$row=mysqli_fetch_row($res);
	}
	
	if (isset($_POST['update_game'])){
		$id=$_POST['id'];
		$newGameName=$_POST['newGameName'];
		$newGameYear=$_POST['newGameYear'];
		$newStorageType=$_POST['newStorageType'];
		
		mysqli_query($con, "UPDATE game SET game_name='$newGameName', year='$newGameYear', storage_type='$newStorageType' WHERE id=$id");
		header('location: preview.php');		
	}
	
	if (isset($_GET['edit_program'])){
		$id=$_GET['edit_program'];
		$res=mysqli_query($con, "SELECT * FROM program WHERE id=$id");
		$row=mysqli_fetch_row($res);
	}
	
	if (isset($_POST['update_program'])){
		$id=$_POST['id'];
		$newProgramName=$_POST['newProgramName'];
		$newProgramCreator=$_POST['newProgramCreator'];
		$newProgramYear=$_POST['newProgramYear'];
		$newStorageType=$_POST['newStorageType'];
		
		mysqli_query($con, "UPDATE program SET program_name='$newProgramName', year='$newProgramYear', creator='$newProgramCreator', storage_type='$newStorageType' WHERE id=$id");
		header('location: preview.php');		
	}
	
	if (isset($_GET['edit_movie'])){
		$id=$_GET['edit_movie'];
		$res=mysqli_query($con, "SELECT * FROM movie WHERE id=$id");
		$row=mysqli_fetch_row($res);
	}
	
	if (isset($_POST['update_movie'])){
		$id=$_POST['id'];
		$newMovieTitle=$_POST['newMovieTitle'];
		$newMovieYear=$_POST['newMovieYear'];
		$newMovieLanguage=$_POST['newMovieLanguage'];
		$newMovieType=$_POST['newMovieType'];
		$newStorageType=$_POST['newStorageType'];
		
		mysqli_query($con, "UPDATE movie SET movie_title='$newMovieTitle', year='$newMovieYear', language='$newMovieLanguage', type='$newMovieType', storage_type='$newStorageType' WHERE id=$id");
		header('location: preview.php');		
	}
	
	if (isset($_GET['edit_book'])){
		$id=$_GET['edit_book'];
		$res=mysqli_query($con, "SELECT * FROM book WHERE id=$id");
		$row=mysqli_fetch_row($res);
	}
	
	if (isset($_POST['update_book'])){
		$id=$_POST['id'];
		$newBookTitle=$_POST['newBookTitle'];
		$newAuthor=$_POST['newAuthor'];
		$newBookType=$_POST['newBookType'];
		$newBookLanguage=$_POST['newBookLanguage'];
		$newBookYear=$_POST['newBookYear'];
		$newBookFormat=$_POST['newBookFormat'];
		$newStorageType=$_POST['newStorageType'];
		
		mysqli_query($con, "UPDATE book SET title='$newBookTitle', author='$newAuthor', type='$newBookType', language='$newBookLanguage', year='$newBookYear', format='$newBookFormat', storage_type='$newStorageType' WHERE id=$id");
		header('location: preview.php');		
	}
	
	if (isset($_GET['edit_file'])){
		$id=$_GET['edit_file'];
		$res=mysqli_query($con, "SELECT * FROM file WHERE id=$id");
		$row=mysqli_fetch_row($res);
	}
	
	if (isset($_POST['update_file'])){
		$id=$_POST['id'];
		$newFileTitle=$_POST['newFileTitle'];
		$newFileDescription=$_POST['newFileDescription'];
		$newFileFormat=$_POST['newFileFormat'];		
		$newStorageType=$_POST['newStorageType'];
		
		mysqli_query($con, "UPDATE file SET title='$newFileTitle', description='$newFileDescription', format='$newFileFormat', storage_type='$newStorageType' WHERE id=$id");
		header('location: preview.php');		
	}
	
	if (isset($_GET['edit_photo'])){
		$id=$_GET['edit_photo'];
		$res=mysqli_query($con, "SELECT * FROM photo WHERE id=$id");
		$row=mysqli_fetch_row($res);
	}
	
	if (isset($_POST['update_photo'])){
		$id=$_POST['id'];
		$newPhotoDescription=$_POST['newPhotoDescription'];
		$newPhotoCount=$_POST['newPhotoCount'];
		$newPhotoYear=$_POST['newPhotoYear'];		
		$newStorageType=$_POST['newStorageType'];
		
		mysqli_query($con, "UPDATE photo SET description='$newPhotoDescription', count='$newPhotoCount', year='$newPhotoYear', storage_type='$newStorageType' WHERE id=$id");
		header('location: preview.php');		
	}
	
	if (isset($_GET['edit_music'])){
		$id=$_GET['edit_music'];
		$res=mysqli_query($con, "SELECT * FROM music WHERE id=$id");
		$row=mysqli_fetch_row($res);
	}
	
	if (isset($_POST['update_music'])){
		$id=$_POST['id'];
		$newMusicArtist=$_POST['newMusicArtist'];
		$newSongName=$_POST['newSongName'];
		$newMusicAlbum=$_POST['newMusicAlbum'];		
		$newMusicFormat=$_POST['newMusicFormat'];
		$newMusicYear=$_POST['newMusicYear'];
		$newStorageType=$_POST['newStorageType'];
		
		mysqli_query($con, "UPDATE music SET artist='$newMusicArtist', song_name='$newSongName', album='$newMusicAlbum', format='$newMusicFormat', year='$newMusicYear', storage_type='$newStorageType' WHERE id=$id");
		header('location: preview.php');		
	}
	
	//-----------------Searching in tables---------------------------//
	if (isset($_POST['search'])){
		$searchWord = $_POST['searchWord'];		
		$resultBook = mysqli_query($con, "SELECT * FROM book WHERE title LIKE '%$searchWord%' OR author LIKE '%$searchWord%' OR year LIKE '%$searchWord%'");
		$resultFile = mysqli_query($con, "SELECT * FROM file WHERE title LIKE '%$searchWord%' OR description LIKE '%$searchWord%'");
		$resultGame = mysqli_query($con, "SELECT * FROM game WHERE game_name LIKE '%$searchWord%' OR year LIKE '%$searchWord%'");
		$resultMovie = mysqli_query($con, "SELECT * FROM movie WHERE movie_title LIKE '%$searchWord%' OR year LIKE '%$searchWord%'");
		$resultMusic = mysqli_query($con, "SELECT * FROM music WHERE artist LIKE '%$searchWord%' OR song_name LIKE '%$searchWord%' OR album LIKE '%$searchWord%' OR year LIKE '%$searchWord%'");
		$resultPhoto = mysqli_query($con, "SELECT * FROM photo WHERE description LIKE '%$searchWord%' OR year LIKE '%$searchWord%'");
		$resultProgram = mysqli_query($con, "SELECT * FROM program WHERE program_name LIKE '%$searchWord%' OR creator LIKE '%$searchWord%' OR year LIKE '%$searchWord%'");		
	}
	
	// escape string
	function e($val){
		global $con;
		return mysqli_real_escape_string($con, trim($val));
	}
	
	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}
?>