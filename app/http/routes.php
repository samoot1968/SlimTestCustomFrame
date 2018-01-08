<?php 


use App\Controllers\HomeViewController;



$app->get('/', HomeViewController::class .':test')->setName('DashBoard');

$app->get('/profile', HomeViewController::class .':getSomeInformation')->setName('Profile');

$app->get('/Test', function(){
	echo "Test";
})->setName('Test');





 ?>