<?php
	require 'vendor/autoload.php';

	$controllerAgenda = new App\Controllers\ControllerUser();

	$user = array(
		'id'  => '1'
	);

	print_r($controllerAgenda->query($user));
?>