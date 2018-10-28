<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>	
		<link rel="stylesheet" type="text/css" href="css/styleRButtons.css">		
    </head>
    <body>
        <section class="container">
            <div class="page-header">
                <h1 style="text-align:center">Home page</h1>
				<h3 style="text-align:center">choose what to do</h3>
            </div>        
            <form class="form-horizontal" action="">
				<div class="form-group">                    
                    <div class="col-lg-3" align="right">
                        <a href="enter/enter_game.php"><button class="btng" type="button">Game</button></a>
                    </div>					
					<div class="col-lg-3" align="center">
                        <a href="enter/enter_movie.php"><button class="btnm" type="button">Movie</button></a>
                    </div>					
					<div class="col-lg-3" align="center">
                        <a href="enter/enter_program.php"><button class="btnp" type="button">Program</button></a>
                    </div>
					<div class="col-lg-3" align="left">
                        <a href="enter/enter_book.php"><button class="btnb" type="button">Book</button></a>
                    </div>					
                </div>
				
				<div class="form-group">
                    <div class="col-lg-4" align="right">
                        <a href="enter/enter_photo.php"><button class="btnph" type="button">Photo</button></a>
                    </div>					
					<div class="col-lg-4" align="center">
                        <a href="tasks/preview.php"><button class="btnpr" type="button">Preview</button></a>
                    </div>						
					<div class="col-lg-4" align="left">
                        <a href="enter/enter_file.php"><button class="btnf" type="button">File</button></a>
                    </div>
                </div>				
				
				<div class="form-group"><br>                 
                    <div class="col-lg-12" align="center">
                        <a href="enter/enter_music.php"><button class="btna" type="button">Music</button></a>
                    </div>										
                </div>								
            </form>			
        </section>        
    </body>
</html>