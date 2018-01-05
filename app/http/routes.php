<?php 


use App\Controllers\HomeViewController;

$app->get('/', HomeViewController::class .':test');


 ?>