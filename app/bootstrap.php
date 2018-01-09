<?php 

use App\Containers\ViewContainer;
use App\Containers\PDOContainer;
use App\Containers\EloquentContainer;
use App\JSONFormatter\JSONFormatter;

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


//$db = new PDOContainer($app);
//$db->db();

$db = new EloquentContainer($app);
$db->Eloquent();


$view = new ViewContainer($app);
$view->ViewContainer();


require_once 'app/http/routes.php';


$app->run();

 ?>