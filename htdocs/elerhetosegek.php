<!doctype html>
<html lang="hu">
<head>
    <title>Discord bot Hirdető</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/main.css" media="all">
	<link rel="icon" type="image/png" href="pics/favicon.png">
</head>
<body>
	<div class="wrapper">
		<header>
			Elérhetőségek
		</header>
	
		<div class="content">
			<nav>
				<ul>
					<li><a href="main.html">Kezdőlap</a></li>
					<li><a href="botok.html">Botok</a></li>
					<li><a href="Hírdetés/index.php">Új Hirdetés</a></li>
					<li><a href="gyik.html">GY.I.K</a></li>
                    <li><a href="szabalyzat.html">Szabályzat</a></li>
					<li><a href="partnerek.html">Partnerek</a></li>
					<li><a href="hirek.html">Hírek</a></li>
					<li><a href="elerhetosegek.php">Elérhetőségek</a></li>
					<li><a href="rolunk.html">Rólunk</a></li>
				</ul>
			</nav>
			<main>
				<h1><span>Elérhetőségek:</span></h1>
				<ul><a href="https://discord.gg/Aw34XDQR8f">Discord szerverünk</a></ul>
				<ul><a href="https://www.facebook.com/HUNDCbothirdeto">Facebook oldalunk</a></ul>
				<ul><a href="https://discord.gg/ZudfEwexxY">Fluke Hivatalos Discord szervere</a></ul>
				<ul>Blank elérhetősége: BL4NK#9542</ul>
				<ul>Fluke elérhetősége: FLUK3#3172</ul>
				<ul>E-mail cím: magyardiscordbothirdeto@gmail.com</ul>
				<p>Megkérünk minden kedves E-mail írót, hogy legyenek türelmesek válaszunkra, ugyanis nem tudunk egyszerre 8 E-mailre válaszolni! Hogyha 1 óra után tudunk válaszolni akkor csak akkor! Megpróbálunk mindenkinek mihamarabb a legpontosabb az igényeknek megfelelően a leggyorsabban válaszolni abban az esetben, hogyha nem 543-szor írja le ugyanazt 10 különbző E-mailről! Türelmeteket köszönjük!</p>
<?php
	date_default_timezone_set("Europe/Budapest");
	$open = 16;
	$close = 21;
	$now = date("H");
	$message = "Az emailkre válaszolunk! Írj bátran!";			
	
	if($now < $open) {
		$message = "Alszunk! Jelenleg zárva vagyunk!";
	} else if ($now > $close) {
		$message = "A mai nap már nem fogunk válaszolni az emailekre!";
	}

	echo '<p>Az emailekre: '. $open .'-tól '. $close .'-ig válaszolunk!</p>
		<p>'. $message .'</p>	
	'
?>
			</main>
		</div>
		<footer>
			<div class="left">Copyrighted by Special Support Squadron</div>
			</div>
		</footer>
	</div>
</body>
</html>