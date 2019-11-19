<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css"/>
		<title>Livre d'or - Livre d'or</title>
	</head>
	
	<body>
		<div class="body">
			<header>
				<?php
					include("header.php");
				?>
			</header>
		
			<div id="livre_or">
				<?php
					if(isset($_SESSION['login']) || isset($_SESSION['password']))
					{
						echo '<a id="ajout_commentaire" href="commentaire.php">Ajouter un commentaire</a>';
					}
				
					$connexion = mysqli_connect("localhost", "root", "", "livreor");
					$requete = "SELECT * FROM commentaires ORDER by id DESC";
					$resultat = mysqli_query($connexion, $requete);
				
					while($donnees = mysqli_fetch_array($resultat))
					{
				?>
				
				<div class="commentaire">
					<div class="commentaire_1">
						<?php
							$requete = "SELECT login FROM utilisateurs WHERE id = '".$donnees['id_utilisateur']."'";
							$req = mysqli_query($connexion, $requete);
							$data = mysqli_fetch_assoc($req);
						
							echo "<h3>Par: ", $data['login'], " le ", $donnees['date'], "</h3>";
						?>
					</div>
					<div class="commentaire_2">
						<?php echo $donnees['commentaire']; ?>
					</div>
				</div>
				
				<?php
					}
					mysqli_close();
				?>
				</table>
			</div>
		
			<footer>
				<?php
					include("header.php");
				?>
			</footer>
		</div>
	</body>	
</html>