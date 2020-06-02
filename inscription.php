

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Inscription</title>
	</head>
<body >	<header>
	<?php include('header.php');
	if(isset($_SESSION['login']) || isset($_SESSION['password']))
	{
		header('Location: index.php');
	}
?>
</header>
	
		
<section>
	<form class="formu"method="post">
					<fieldset>
					<legend>Inscription</legend>
						<input type="text" name="login" required placeholder="login"/>
						
						<input type="text" name="prenom" required placeholder="prenom"/>
						
						<input type="text" name="nom" required placeholder="nom"/>
						</fieldset>
						<fieldset>

						<input type="password" name="pass" required placeholder="mot de passe"/>
					
						<input type="password" name="pass2" required placeholder="confirme mot de passe"/>
						
						<input type="submit" value="Inscription" name="inscription"/>
					</fieldset>
				</form>
</section>
		
	</body>
</html>
<?php
	if (isset($_POST['inscription']))
	{
		$login = $_POST['login'];
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$pass = $_POST['pass'];
		$pass = sha1($pass);
		$pass2 = $_POST['pass2'];
		$connexion = mysqli_connect("localhost", "root", "", "moduleconnexion");
				$requete = "SELECT login FROM utilisateurs WHERE login = '$login'";
		$query = mysqli_query($connexion, $requete);	
		$resultat = mysqli_num_rows($query); 

		
		

                    if ($resultat==1) 
                    {	


                    ?>
                    <h2 class='titre'><p>Ce Login est déjà prit</p></h2>
					<?php 
                      }
  elseif ($_POST["pass"] != $_POST["pass2"]) 
              {
  ?>
	 <h2 class='titre'> <p>Attention ! Mot de passe différents</p></h2>
  <?php
              }
  else 
  {
	  $requete2 = "INSERT INTO utilisateurs(login, prenom, nom, password) VALUES ('$login', '$prenom', '$nom','$pass')";
	  $query2 = mysqli_query($connexion, $requete2);
	  header('Location:connexion.php');
  }
}

?>	