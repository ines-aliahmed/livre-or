	<nav>
<ul>


<?php
session_start();
if(isset($_SESSION['login']))
		{ if($_SESSION['login'] == "admin"){
			echo '


<li><a href="index.php">Acceuil</a></li>

 <li><a href="profil.php">Profil</a></li>
 <li><a href="admin.php">admin</a></li>



<li>
        <form action="index.php" method="post">
            <input type="submit" name="deconnexion" class="deco" value="deconnexion">
        </form>
 </li>      			 ';
    }
    else{
        echo '

        <li><a href="index.php">Acceuil</a></li>
         <li><a href="profil.php">Profil</a></li>
        
        <li>
                <form action="index.php" method="post">
                    <input type="submit" name="deconnexion"class="deco" value="deconnexion">
                </form>
      </li>          ';
            }
    
        
if (isset($_POST['deconnexion'])) {
                session_unset();
                session_destroy();
                header('Location:index.php');
            }
        }
		

 else
{
  echo '
							
 
    <li><a href="index.php">Acceuil</a></li>
 <li><a href="inscription.php">Inscription</a></li>
 <li><a href="connexion.php">Connexion</a></li>



  ';
}


?>
</ul>
	</nav>