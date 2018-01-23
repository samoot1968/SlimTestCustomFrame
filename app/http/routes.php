<?php 

//Pull in all Controllers
use App\Controllers\HomeViewController;
use App\Controllers\Auth\AuthController;





$app->get('/', HomeViewController::class .':HomeView')->setName('Home');



$app->group('/auth', function() {

	$this->get('/register', AuthController::class. ':getSignUp')->setName('RegisterView');
	$this->post('/register', AuthController::class. ':postSignUp')->setName('Register');

});





 ?>