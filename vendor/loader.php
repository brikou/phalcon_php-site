<?php

//Creates the autoloader
spl_autoload_register(function($className){
	$paths = array(
		'ControllerBase' => '../app/controllers/ControllerBase.php',
		'UIElements' => '../vendor/UIElements/UIElements.php'
	);
	if(isset($paths[$className])){
		require $paths[$className];
	}
});
