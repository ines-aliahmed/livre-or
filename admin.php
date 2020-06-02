
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Admin</title>
	</head>
	
	<body>
		<header>
		<?php 
		include('header.php') ;
		if(isset($_SESSION['login']))

	{   if(($_SESSION['login'] !== 'admin'))
		{
			header('Location: index.php');
		}
	} 
		?>
		</header>
		
		<section>
		
				<?php
					$connexion = mysqli_connect("localhost", "root", "", "moduleconnexion");
					$sql = "SELECT * FROM utilisateurs";
					$resultat = mysqli_query($connexion, $sql);
				?>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Nom d'utilisateur</th>
							<th>Prénom</th>
							<th>Nom</th>
							<th>Mot de passe</th>
						</tr>
					</thead>
					<?php
						while($data = mysqli_fetch_array($resultat))
						{
					?>
						<tbody>
							<tr>
								<td><?php echo $data['id'];?></td>
								<td><?php echo $data['login'];?></td>
								<td><?php echo $data['prenom'];?></td>
								<td><?php echo $data['nom'];?></td>
								<td><?php echo $data['password'];?></td>
							</tr>
						</tbody>
					<?php
						}
						mysqli_close($connexion);
					?>
				</table>
					</section>
		

	</body>
</html>