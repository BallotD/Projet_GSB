<?php
$statutActu = 2;

echo("Consultation des échantillons");
echo("</br>");
$lesEchantillons = listeEchantillon($statut);
foreach($unEchantillon in $lesEchantillons) {
	echo($unEchantillon.
?>