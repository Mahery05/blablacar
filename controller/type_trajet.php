<?php

session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/blablacar/bdd/include/path.php';

require_once $model_path . 'bdd.php';


if(isset($_POST['ville_dep']) && isset($_POST['ville_ar']) && isset($_POST['distance']) && isset($_POST['temps_moyen'])){
	
	$isType = isTrajetType($_POST['ville_dep'], $_POST['ville_ar']);

	if(!$isType){
		addTrajetType($_POST['ville_dep'], $_POST['ville_ar'], $_POST['distance'], $_POST['temps_moyen']);
	}

	$trajets = getTrajetsType();
	require $view_path . 'type_trajet.php';
	exit();
}
else{
	
	$trajets = getTrajetsType();
	require $view_path . 'type_trajet.php';
	exit();
}