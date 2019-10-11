<div class="home">
<link rel="stylesheet" type="text/css" href="./includes/css/faitmaison.css">
   <table class="table table-striped">
      <Caption>La liste de tous les echantillons</Caption>
      <thead>
   	  <tr>
   		<th>Numero du lot</th>
         <th>Nombre d'echantillon</th>
   		<th>Medicament</th>
   		<th>Date</th>
   	</tr>
   </thead>
   <tbody>

<?php
$statut = 0;

$lesechantillons = echantillon();
foreach($lesechantillons as $unechantillon){
	echo'<tr>'
	
	
            . '<td>' . $unechantillon['numLot'] . '</td>'
            . '<td>' . $unechantillon['nbr'] . '</td>'
            . '<td>' . $unechantillon['libelleMedicament'] . '</td>'
            . '<td>' . $unechantillon['dateLot'] . '</td>'
            . '</tr>';
}
?>
</tbody>
</table>
</div>
