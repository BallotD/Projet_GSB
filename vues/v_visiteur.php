<?php

echo("Consultation des échantillons");
echo("</br>");
$lesEchantillons = listeEchantillon();
foreach($lesEchantillons as $unEchantillon) {
	echo '<tr>'
	. '<th>' . $unEchantillon["numEchantillon"] . '</th>' 
	. '<th>' . $unEchantillon["dateVisite"] . '</th>' 
	. '<th>' . $unEchantillon["libelleMedicament"] . '<th>'
	. '<th>' . $unEchantillon["nomMedecin"] . '</th>'
	. '<th>' . $unEchantillon["prenomMedecin"] . '</th>'
	. '</tr>' ;
	
}
?>