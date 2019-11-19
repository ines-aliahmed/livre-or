<?php
	session_start();
	if(isset($_SESSION['login']) || isset($_SESSION['password'])){}
	else
	{
		header('Location: index.php');
	}
	$connexion = mysqli_connect("localhost", "root", "", "livreor");
	$sql = "SELECT * FROM utilisateurs WHERE login='".$_SESSION['login']."'";
	$req = mysqli_query($connexion, $sql);
	$data = mysqli_fetch_assoc($req);
?>	
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css"/>
		<title>Mon Compte - Livre d'or</title>
	</head>
	
	<body>
		<div class="body">
			<header>
				<?php
					include("header.php");
				?>
			</header>
		
			<div id="compte">
				<form method="post">
					<label>LOGIN :</label><input type="text" name="login" value="<?php echo $data['login']; ?>" class="compte_2"/><br /><br />
					<label>MOT DE PASSE :</label><input type="password" name="passe" value="<?php echo $data['password']; ?>" class="compte_2"/><br /><br />
					<input type="submit" value="Modifier" name="modifier" class="compte_2" id="bouton"/>
					<?php
					include("verification/verif-modification.php");
					?>
				</form>
			</div>
		
			<footer>
				<?php
					include("header.php");
				?>
			</footer>
		</div>
	</body>	
</html>