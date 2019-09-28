<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="./assets/icons/icon.png" sizes="16x16">
		<link rel="stylesheet" type="text/css" href="./assets/style.css">
		<link rel="stylesheet" type="text/css" href="../../header.css">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<title>Clash Royale</title>
	</head>
  
  <body>
	<div class='container'>
	<div class='juegos'>
		<?php
			$title='clash';
			include "../../header.php";
		?>
		<div class='formulario'>
			<div class='tag'>
				<form class='' action='./clash.php' method='post'>
					<label for=''>Tag: <span class='gato'>#</span></label>
					<input type='text' name='tag' value='R0UQGGVR'>
					<input type='submit' name='' class='botonf' value='Buscar'>
				</form>
				
				<img class='imagen' src='./assets/icons/challenges.png' >		
			</div>
			
			<div class='clanf'>
				<form class='' action='./clanes.php' method='post'>
					<label for=''>Clan: <span class='gato'>#</span> </label>
					<input type='text' name='clan' value='9LYCLPUR'>
					<input type='submit' name='' class='botonf' value='Buscar'>
				</form>
				
				<img class='imagen' src='./assets/icons/clan.png'>
			</div>
		</div>
	</div>
	</div>
	   <script src="http://code.jquery.com/jquery-latest.js"></script>
   <script src="../../menu.js"></script>
   <script src="../../header.js"></script>
      <script src="../../botonscroll.js"></script>
  </body>
</html>
