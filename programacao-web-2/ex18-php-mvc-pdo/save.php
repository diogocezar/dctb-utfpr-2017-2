<?php
	require 'vendor/autoload.php';

	$controllerAgenda = new App\Controllers\ControllerUser();

	$user = array(
		'name'  => 'Diogo Cezar',
		'email' => 'diogo@diogocezar.com'
	);

	$controllerAgenda->save($user);
?>