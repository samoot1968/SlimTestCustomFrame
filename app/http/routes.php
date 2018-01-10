<?php 


use App\Controllers\HomeViewController;



$app->get('/', HomeViewController::class .':HomeView')->setName('DashBoard');



 ?>