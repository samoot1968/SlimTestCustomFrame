<?php 

use App\Containers\ViewContainer;




require 'vendor/autoload.php';

$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true
	]
]);





$view = new ViewContainer($app);
$view->ViewContainer();



require_once 'app/http/routes.php';


$app->run();

 ?>