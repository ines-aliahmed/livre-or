<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" media="screen and (min-device-width: 480px)" href="style.css"/>
		<title>Accueil - Livre d'or</title>
	</head>
	
	<body>
		<div class="body">
			<header>
				<?php
					include("header.php");
				?>
			</header>
		
		
			<div id="accueil">
				<?php
					if(isset($_SESSION['login']) || isset($_SESSION['password']))
					{
						echo "<h2>Bienvenue a Briancon ".$_SESSION['login']."</h2>";
					}
					else{
						echo "<h2>Bienvenue a Briancon</h2>";
					}
				?>
			</div>
		
			<footer>
				<?php
					include("header.php");
				?>
			</footer>
		</div>
	</body>	
</html>