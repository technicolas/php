<html>
	<head>
		<meta charset="utf-8" />
		<title>La blague du jour (source -> https://official-joke-api.appspot.com/)</title>
		<link rel="stylesheet" type="text/css" href="joke.css" />
	</head>

	<body>
		<div class="header">
  			<h1><a href="<?php $_SERVER['PHP_SELF']; ?>">Actualiser la page</a></h1>
		</div>
		
		<div class="menu">
			<h1><a>A écrire...</a></h1>
		</div>

		<div class="main">
			<?php

				// Décryptage des données provenant du fichier JSON
				$json = file_get_contents("https://v2.jokeapi.dev/joke/Any?lang=fr&blacklistFlags=nsfw,religious,political,sexist,explicit");
				$parsed_json = json_decode($json);
				
				$idBlague = $parsed_json->{"id"};
				$question = $parsed_json->{"setup"};
				$reponse = $parsed_json->{"delivery"};
				
				// Affichages
				echo "Nous sommes le " . date("d.m.Y") . " et je vous propose cette petite blague:" . "<br>";
				echo "<p>";
				echo "<p class=\"blague\"> $idBlague";
	      		echo "<p class=\"question\"> $question";
	      		echo "<p class=\"reponse\"> $reponse";
			?>
		</div>
	</body>
	
	<footer>&copy Nicolas - <?php echo date("Y"); ?> </footer>
</html>


