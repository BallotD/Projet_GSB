<?php
function loginUser($utilisateur, $mdp) {

	$connect = new connexion();
	$bdd = $connect->getInstance();
	$sql = "select * from utilisateur" ;
	$exec=$bdd->query($sql);
	$trouve = false; 
	$fin = false;
	$i = -1;
	while (!$trouve && !$fin)
	{
		if ($ligne = $exec->fetch())
		{
			if ($ligne['nomUtilisateur'] == $utilisateur && $ligne['mdpUtilisateur'] == $mdp)
			{
				$trouve = true;
				$_SESSION['nomUtilisateur']=$ligne['nomeUtilisateur'];
				$_SESSION['statut']=$ligne['statut'];
				$i = $_SESSION['statut'];
			}
		}
		else 
			$fin=true;
	}
	return $i;
}
?>