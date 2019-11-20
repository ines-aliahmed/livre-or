<?php
	session_start();
	if(isset($_SESSION['login']) || isset($_SESSION['password'])){}
	else
	{
		header('Location: index.php');
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" media="screen and (min-device-width: 480px)" href="style.css"/>
		<title>Livre d'or - Livre d'or</title>
	</head>
	
	<body>
		<div class="body">
			<header>
				<?php
					include("header.php");
				?>
			</header>
		
			<div id="formulaire">
				<h2>Ajouter un commentaire</h2>
				<form method="post">
					<textarea name="commentaire" id="formulaire_2" placeholder="ÉCRIVÉ VOTRE COMMENTAIRE"></textarea>
					<input type="submit" name="submit" id="formulaire_3">
				</form>
				<?php
					if(isset($_POST['submit']))
					{
						$utilisateur = $_SESSION['id'];
						$commentaire = $_POST['commentaire'];
						
						$connexion = mysqli_connect("localhost", "root", "", "livreor");
						$sql= "INSERT INTO commentaires (commentaire, id_utilisateur, date) VALUES ('$commentaire', '$utilisateur', NOW())";
						mysqli_query($connexion, $sql);
						mysqli_close($connexion);
						echo '<meta http-equiv="refresh" content="0;URL=livre-or.php">';
						mysqli_close($connexion);
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