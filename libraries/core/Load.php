<?php

$controller = ucfirst($controller);
$controllerFile = 'controllers/'.$controller.'.php';
if(file_exists($controllerFile)) {
	require_once($controllerFile);
	$controller = new $controller();
	if(method_exists($controller,$method)) {
		$controller->{$method}($params);
	} else {
		require_once 'controllers/Errors.php';
	}
} else {
	require_once 'controllers/Errors.php';
}	