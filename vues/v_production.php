<div class="home">

   <div id ="home_title">La liste de tout les echantillons</div>
   <table class="table table-striped">
   	<tr>
   		<th>Numero du lot</th>
   		<th>Medicament</th>
   		<th>Date</th>
   	</tr>
<?php
$statut = 0;

$lesechantillons = echantillon();
foreach($lesechantillons as $unechantillon){
	echo'<tr>'
	
	
            . '<th>' . $unechantillon['numLot'] . '</th>'
            . '<th>' . $unechantillon['libelleMedicament'] . '</th>'
            . '<th>' . $unechantillon['dateSortieStock'] . '</th>'
            . '</tr>';
}
?>