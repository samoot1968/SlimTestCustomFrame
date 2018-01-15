<?php 

use App\Containers\ContainerRegistration;

require 'vendor/autoload.php';

$configuration = require 'config.php';

$app = new \Slim\App($configuration);


$instatiateContainer = new ContainerRegistration;
$instatiateContainer->instatiate($app);

require_once 'app/http/routes.php';


$app->run();

 ?>