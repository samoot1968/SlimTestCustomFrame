<?php 

use App\Containers\ContainerRegistration;

require 'vendor/autoload.php';


$app = new \Slim\App(require 'config.php');


$instatiateContainer = new ContainerRegistration;
$instatiateContainer->instatiate($app);

require_once 'app/http/routes.php';


$app->run();

 ?>