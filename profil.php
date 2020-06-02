
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Profil</title>
	</head>
	
	<body class ="body-profile">
		<header>
			
			<?php include('header.php') ;
			if(!isset($_SESSION['login'])){header('Location: index.php');}

			

?>
		</header>
		
		
			<section>
				<form method="post">
                <?php
            if (isset($_SESSION['login'])) 
            {
             $connexion = mysqli_connect("localhost", "root", "", "moduleconnexion");
$sql = "SELECT * FROM utilisateurs WHERE login='".$_SESSION['login']."'";
$req = mysqli_query($connexion, $sql);
$req2 = mysqli_fetch_assoc($req);
                ?>

					<fieldset>
						<legend>Modifier Login</legend>
						<label>LOGIN :</label><input type="text" name="login" value="<?php echo $req2['login']; ?>" />
					</fieldset>
					<fieldset>
						<legend>Modifier Information</legend>
						<label>PRENOM :</label><input type="text" name="prenom" value="<?php echo $req2['prenom']; ?>" />
						<label>NOM :</label><input type="text" name="nom" value="<?php echo $req2['nom']; ?>"/>
					</fieldset>
					
					<input type="submit" value="valider modification" name=" modifier" />


				</form>
			</section>
		
		
		<footer>
			
			
		</footer>
	</body>	
</html>
<?php


if(isset($_POST['modifier']))
{
	if(!empty($_POST['login']) && !empty($_POST['nom']) && !empty($_POST['prenom']))
	{
		$login = $_POST['login'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
		$modif_login = false;
        $modif_nom= false;
        $modif_prenom= false;

	
		
		if($login != $req2['login'])
		{
			$nouveau_login = "SELECT id FROM utilisateurs WHERE login='".$login."'";
			$resultat = mysqli_query ($connexion, $nouveau_login);
			$nombre_login = mysqli_num_rows($resultat);
			if($nombre_login < 1)
			{
				$sql = "UPDATE utilisateurs SET login = '$login' WHERE login = '".$_SESSION['login']."'";
				mysqli_query($connexion, $sql);
				$_SESSION['login'] = $_POST['login'];
				$modif_login = true;
			}{
				echo "<div class='coco'><p> Login modifier avec succès</p></div>";}
		
        }
        if($nom != $req2['nom'])
		{
			
			$sql = "UPDATE utilisateurs SET nom = '$nom' WHERE login = '".$_SESSION['login']."'";
			mysqli_query($connexion, $sql);
			$_SESSION['nom'] = $_POST['nom'];
			$modif_nom = true;
		}	{
			echo "<div class='coco'><p>Nom modifier avec succès</p></div>";}
    

    if($prenom != $req2['prenom'])
    {
        
        $sql = "UPDATE utilisateurs SET prenom = '$prenom' WHERE login = '".$_SESSION['login']."'";
        mysqli_query($connexion, $sql);
        $_SESSION['prenom'] = $_POST['prenom'];
        $modif_prenom = true;
    }	{
        echo "<div class='coco'><p>prenom modifier avec succès</p></div>";}
}
}
mysqli_close($connexion);

            }

?>