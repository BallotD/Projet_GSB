<?php

if (!isset($_REQUEST['action']))
	$action = "visiteurs" ;
else {
	$action = $_REQUEST['action'] ;
}

$i = loginUser($_REQUEST['login'], $_REQUEST['password']);

if ($i == 0)
{
	include "./vues/v_visiteur.php";
	
}
else if ($i = 1)
{
	include "./vues/v_magasiniers.php";
	  
}
else if ($i = 2)
{
	include "./vues/v_production.php";
	
}	
?>