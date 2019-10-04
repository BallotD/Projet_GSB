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
			if ($ligne['nomUtilisateur'] == $utilisateur && $ligne['mdpUtilisateur'] == md5($mdp))
			{
				$trouve = true;
				$_SESSION['nomUtilisateur']=$ligne['nomUtilisateur'];
				
				$i = $ligne['statut'];
			}
		}
		else 
			$fin=true;
	}
	return $i;
}
function listeEchantillon($statut) {
	$connect = new connexion();
	$bdd = $connect->getInstance();
	$sql = "select numEchantillon, dateVisite, libelleMedicament, nomMedecin, prenomMedecin from echantillon 
	inner join lot on numLot = numLotEchantillon
	inner join medecin on idMedecin = idMedecinEchantillon
	inner join medicament on idMedicament = idMedicamentLot
	where statut = ".$statut ;
	$exec=$bdd->query($sql);
	return $exec;
}
?>