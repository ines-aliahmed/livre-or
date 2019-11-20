<?php
	$connexion = mysqli_connect("localhost", "root", "", "livreor");
	$sql = "SELECT * FROM utilisateurs WHERE login='".$_SESSION['login']."'";
	$req = mysqli_query($connexion, $sql);
	$data = mysqli_fetch_assoc($req);
	
	if(isset($_POST['modifier']))
	{
		if(!empty($_POST['login']) && !empty($_POST['passe']))
		{
			$login = $_POST['login'];
			$passe = $_POST['passe'];
			
			if($login != $data['login'])
			{
				$sql = "UPDATE utilisateurs SET login = '$login' WHERE login = '".$_SESSION['login']."'";
				mysqli_query($connexion, $sql);
				$_SESSION['login'] = $_POST['login'];
			}
			
			if($passe != $data['password'])
			{
				$passe = sha1($passe);
				$sql = "UPDATE utilisateurs SET password = '$passe' WHERE login = '".$_SESSION['login']."'";
				mysqli_query($connexion, $sql);
			}
			
			echo 'Vos données ont bien été mise à jour';
			
			ob_end_flush();
			flush();
			sleep(3);
			
			echo '<meta http-equiv="refresh" content="0;URL=profil.php">';
		}
		else
		{
			echo "Veuillez remplir toutes les casses";
		}
		mysqli_close($connexion);
	}
?>