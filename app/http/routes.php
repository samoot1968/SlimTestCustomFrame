<?php 


use App\Controllers\HomeViewController;
use App\Controllers\Auth\AuthController;


$app->get('/', HomeViewController::class .':HomeView')->setName('DashBoard');

$app->get('/registration', AuthController::class .':getSignUp');

$app->post('/registration', AuthController::class .':postSignUp')->setName('Register');




 ?>