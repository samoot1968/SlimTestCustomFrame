<?php 


use App\Controllers\HomeViewController;

$customRoutesTest = array();
$customRoutesTest['base_url'] = 'localhost/slim/';




$app->get('/', HomeViewController::class .':test')->setName('DashBoard');

$app->get('/profile', function(){
	echo "Profile";
})->setName('Profile');

$app->get('/Test', function(){
	echo "Test";
})->setName('Test');





 ?>