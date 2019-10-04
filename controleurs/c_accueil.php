<?php
if (!isset($_REQUEST['action']))
	$action = "afficher" ;
else
	$action = $_REQUEST['action'] ;
	
switch ($action)
{
	//page d'accueil du site	
	case "afficher" : {
            require "vues/v_authentification.php" ;
            break ;
	}
}
?>