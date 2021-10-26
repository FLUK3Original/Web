<?php
if(isset($_POST["user_form"])) {
	$felhasznalonev = $_POST["felhasznalonev"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$botname = $_POST["botname"];
	$meghivo = $_POST["meghivo"];
	$leiras = $_POST["leiras"];
	$categories = $_POST["categories"];
	$username_regex = '/^[a-z0-9\_\-\.] {3,10}$/';

	if(strlen ($username) <= 2) {
		echo "<div class=\"message error\"> A felhasználónév túl rövid!<\div>"
	}
}
?>

<!doctype html>
<html lang="hu">
<head>
    <title>Discord bot Hirdető</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" media="all">
	<link rel="icon" type="image/png" href="pics/favicon.png">
</head>
<body>
	<div class="wrapper">
		<header>
			Új Hirdetés
		</header>
	
		<div class="content">
			<nav>
				<ul>
					<li><a href="../main.php">Kezdőlap</a></li>
					<li><a href="../botok.html">Botok</a></li>
					<li><a href="index.php">Új Hirdetés</a></li>
					<li><a href="../gyik.html">GY.I.K</a></li>
                    <li><a href="../szabalyzat.html">Szabályzat</a></li>
					<li><a href="../partnerek.html">Partnerek</a></li>
					<li><a href="../hirek.html">Hírek</a></li>
					<li><a href="../elerhetosegek.php">Elérhetőségek</a></li>
					<li><a href="../rolunk.html">Rólunk</a></li>
				</ul>
			</nav>
			<main>
				<h1><span>Hírdetés előtti tudnivalók</span></h1>
				<p>Mielőtt tovább haladnál vagy egyáltalán kitennél egy új hírdetést előtte kérlek olvasd el a <a href="../szabalyzat.html">szabályzatot</a>! A szabályzat nem ismerete vagy a szabályzattal ütköző bot hirdetéseket nem vagyunk hajlandóak engedélyezni!</p>
				
				<section class="container">
					<form id="user-form">
					  <h1 name='cimsor'>Új hírdetés</h1>
					  
					  <div class="message"></div>
			
					  <div>
						<label for="felhasznalonev">Felhasználónév:</label>
						<input type="text" id="felhasznalonev">
					  </div>
			
					  <div>
						<label for="email">Email:</label>
						<input type="text" id="email">
					  </div>

					  <div>
						<label for="password">Kód:</label>
						<input type="text" id="password">
					  </div>

					  <div>
						<label for="botname">Bot név:</label>
						<input type="text" id="botname">
					  </div>
					
					  <div>
						<label for="meghivo">Bot meghívója:</label>
						<input type="text" id="meghivo">
					  </div>
					  <div>
						<label for="leiras">Bot leírás:</label>				
						<textarea type="text" id="leiras" rows="4" cols="51" style="margin: 0px; width: 300; height: 375 px;"></textarea>
					  </div>

					  <div>
						<label for="categories">Bot kategória:</label>
						<select id="role">
							<option value="fun">Fun</option>
							<option value="economy">Pénz rendszer</option>
							<option value="meme">Mém</option>
							<option value="music">Zene</option>
							<option value="rpg">RPG</option>
							<option value="minecraft">Minecraft</option>
							<option value="moderation">Moderáció</option>
							<option value="notificationbots">Értesítési</option>
							<option value="other">Egyéb</option>
						</select>
					  </div>

					 <input class="button" type="submit" value="Küldés">

					</form>

					<ul id="userlist"></ul>
					<script src="demo.js"></script>
				</section>
			</main>
		</div>
		<footer>
			<div class="left">Copyrighted by Special Support Squadron</div>
			</div>
		</footer>
	</div>
</body>
</html>