<nav>
	<img id="img_menu" src="Images/logo_mairie_briancon_print-300dpi.png">
	<ul>
		<li><a href="index.php">Accueil</a></li>
		<li><a href="livre-or.php">Livre d'or</a></li>
		<?php
			if(!isset($_SESSION['login']) || !isset($_SESSION['password']))
			{
				echo '
					<li><a href="connexion.php">Connexion</a></li>
					<li><a href="inscription.php">Inscription</a></li>
				';
			}
			else
			{
				echo '<li><a href="profil.php">Mon compte</a></li>';
				echo '<li><a href="deconnection.php">Déconnexion</a></li>';
			}
		?>
	</ul>
</nav>