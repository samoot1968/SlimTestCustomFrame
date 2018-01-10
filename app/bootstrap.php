<?php 

use App\Containers\ContainerRegistration;

require 'vendor/autoload.php';


$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true,
		'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'slim',
            'username' => 'root',
            'password' => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
	]
]);


$instatiateContainer = new ContainerRegistration;
$instatiateContainer->instatiate($app);

require_once 'app/http/routes.php';


$app->run();

 ?>