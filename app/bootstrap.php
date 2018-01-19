<?php 

use App\Containers\ContainerRegistration;

require 'vendor/autoload.php';

//Start session, Needed for Error loading and Auth
session_start();


//Require configuration from config.php file.
$app = new \Slim\App(require 'config.php');


//All containers will be instatiated from App\Containers\ContainerRegistration file.
$instatiateContainer = new ContainerRegistration;
$instatiateContainer->instatiate($app);




//Routes file for adding routes
require_once 'app/http/routes.php';



//This is required for adding ValidationMiddleware to $app. This takes in container instance
$container = $app->getContainer();
$app->add(new \App\middleware\ValidationErrorsMiddleware($container));


//SLim basic function for running app
$app->run();

?>