<div class="home">

   <div id ="home_title">La liste de tout les échantillons</div>
   <table class="table table-striped">
   	<tr>
   		<th>Numéro du lot</th>
   		<th>Médicament</th>
   		<th>Date</th>
   	</tr>
<?php
$statut = 0;

$lesechantillons = listeechantillon($statut)
foreach($unechantillon as $lesechantillons){
	echo'<tr>'
	
	
            . '<td>' . $['num_Lot'] . '</td>'
            . '<td>' . $leVehicule['md_libelle'] . '</td>'
            . '<td>' . $leVehicule['vh_km'] . '</td>'
            . '<td>' . number_format($leVehicule['vh_prix'], 2, ',', ' ') . ' €</td>'
            . '</tr>';
}
?>