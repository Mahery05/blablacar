<?php

session_start();

include_once $_SERVER['DOCUMENT_ROOT'] . '/blablacar/bdd/include/path.php';

require_once $model_path . 'bdd.php';

if(isset($_POST['email'])){
	deleteMember($_POST['email']);
}

$comptes = getMembers();
require $view_path . 'gerer_le_compter.php';
exit();