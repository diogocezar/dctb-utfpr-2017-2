<?php
	echo json_encode(array(
		'name_recived'  => $_POST['name'],
		'email_recived' => $_POST['email'],
		'type_recived'  => $_POST['type']
	));
?>