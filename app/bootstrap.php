<?php 
use App\Containers\ContainerRegistration;
session_start();
require 'vendor/autoload.php';

$configuration = require 'config.php';

$app = new \Slim\App($configuration);


$instatiateContainer = new ContainerRegistration;
$instatiateContainer->instatiate($app);

require_once 'app/http/routes.php';



$container = $app->getContainer();
$app->add(new \App\middleware\ValidationErrorsMiddleware($container));

$app->run();

 ?>