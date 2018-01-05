<?php 


use App\Controllers\TestController;

$app->get('/', TestController::class .':test');


 ?>