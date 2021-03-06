<?php
header('HTTP/1.1 503 Service Unavailable');
header('Retry-After: 3600');
?>

<!doctype html>
<html lang="fr">
	<head>
		<title>Site Maintenance</title>
		<style>
			body { text-align: center; padding: 150px; }
			h1 { font-size: 50px; }
			body { font: 20px Helvetica, sans-serif; color: #333; }
			article { display: block; text-align: left; width: 650px; margin: 0 auto; }
			a { color: #dc8100; text-decoration: none; }
			a:hover { color: #333; text-decoration: none; }
		</style>
		<meta charset="utf-8">
	</head>
	<body>
		<article>
				<h1>Site en maintenance</h1>
				<div>
						<p>Nos équipes sont en train d'effectuer une opération de maintenance sur le site, veuillez nous excuser pour la gêne occasionnée. N'hésitez pas à nous contacter par email ou téléphone pour toute urgence.
						<p>&mdash; L'équipe</p>
				</div>
		</article>
	</body>
</html>
