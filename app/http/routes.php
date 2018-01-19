<?php 


use App\Controllers\HomeViewController;
use App\Controllers\Auth\AuthController;


$app->get('/', HomeViewController::class .':HomeView')->setName('Home');

$app->get('/registration', AuthController::class .':getSignUp');

$app->post('/registration', AuthController::class .':postSignUp')->setName('Register');




 ?>