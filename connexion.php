	
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title >Connexion</title>
	</head>
	<body>
		<header>
		<?php include('header.php');
		if(isset($_SESSION['login'])){header('Location: index.php');} ?>
		</header>
		
	<section>
				<form class="formu" method="post" >
					<fieldset>
						<legend>Connexion</legend>
			<input type="text" name="login" required placeholder="login"/>
						<input type="password"  name="pass"  placeholder="mot de passe"required/>
				<input type="submit" value="Se connecter" name="Connexion"/>
			
					</fieldset>
				</form>
</section>
		
		
		<footer>
			
		</footer>
	</body>
</html>

<?php

if(isset($_POST["Connexion"]))
{

	$login=$_POST["login"];
	$password=($_POST["pass"]);
	$password = sha1($password);
	$connexion = mysqli_connect("localhost", "root", "", "moduleconnexion");
	$requete = "SELECT * FROM utilisateurs WHERE login='$login'";
	$query=mysqli_query($connexion,$requete);
	$resultat=mysqli_fetch_all($query);

	
  if(!empty($resultat))
  {

    if ($password == $resultat[0][4])
    {
    	session_start();
      $_SESSION['id']=$resultat[0][0];
      $_SESSION['login']=$resultat[0][1];
    mysqli_close($connexion);
    header('Location: index.php');
    
    }

  }
}

?>