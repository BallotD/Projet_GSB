<?php

$i = loginUser($_REQUEST['login'], $_REQUEST['password']);
if ($i == 2)
{
	include "./vues/v_visiteur.php";
	
}
else if ($i == 1)
{
	include "./vues/v_magasiniers.php";
	  
}
else if ($i == 0)
{
	include "./vues/v_production.php";
	
}	
?>