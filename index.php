<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html lang="en"> 
    <head> 
       <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
       <title>Homepage</title> 
       <link href="css/myCSSfile.css" rel="stylesheet" type="text/css">
       <script src="js/myScript.js"></script>
    </head> 
    <body> 
		<div class="content">
			<h1>Michael Goulding</h1>
			<p class="mybullets">I was born in Utah</p>
			<p class="mybullets">I am married to Melanie</p>
			<p class="mybullets">I aim to improve my skills as an engineer.</p>
			<p class="mybullets">Assignments Click <a href="assignmentpage.php">here</a></p>			
		</div>
        <div class="aboutme">
				<?php 
				   echo '<p>My nickname is Mike. I was born in Utah, but I have lived coast to coast in the United States. I am studying to become a software engineer at BYU Idaho.</p>'; 
                          
				   echo '<p>As one of my hobbies, I participate with the <a href="mercs.php">Mandalorian Mercs</a> costume club. This club is based on characters associated with Star Wars, which costumes and props we build ourselves. This volunteer group raises funds for charities, such as Make A Wish, and aims to lift the spirits of children world-wide.</p>';
				   
				?>
		</div>
    </body> 
</html>