<html>
	<head>
		<meta charset="utf-8" />
		<title>La blague du jour (source -> https://official-joke-api.appspot.com/)</title>
		<link rel="stylesheet" type="text/css" href="joke.css" />
	</head>

	<body>
		<a href="<?php $_SERVER['PHP_SELF']; ?>">Actualiser la page</a>
		<?php

			// Décryptage des données provenant du fichier JSON et mise en forme pour leurs lectures dans la suite du tableau:
			// ---------------------------------------------------------------------------------------------------------------
			$json = file_get_contents("https://v2.jokeapi.dev/joke/Any?lang=fr&blacklistFlags=nsfw,religious,political,sexist,explicit");
			$parsed_json = json_decode($json);
			
			$question = $parsed_json->{"setup"};
			$reponse = $parsed_json->{"delivery"};
			$idBlague = $parsed_json->{"id"};
			
			// Affichage de la première ligne du tableau:
			// ------------------------------------------
			// echo "<p class=\"date\">Date & heure: ${date_jour}";
			echo "<p>";
			
			echo "<p class=\"grandTotal\"> $idBlague";
      			echo "<p class=\"grandTotal\"> $question";
      			echo "<p class=\"grandTotal\"> $reponse";
		?>
	</body>
	<footer>&copy Nicolas - <?php echo date("Y"); ?> /footer>
</html>


