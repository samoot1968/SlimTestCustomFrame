<?php 

use App\Containers\ViewContainer;
use App\Containers\PDOContainer;



require 'vendor/autoload.php';


$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true
	]
]);


$db = new PDOContainer($app);
$db->db();

$view = new ViewContainer($app);
$view->ViewContainer();


require_once 'app/http/routes.php';


$app->run();

 ?>