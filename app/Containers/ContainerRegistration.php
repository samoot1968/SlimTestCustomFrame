<?php 


namespace App\Containers;

use App\Containers\ViewContainer;
use App\Containers\EloquentContainer;
use App\Containers\ValidatorContainer;

class ContainerRegistration
{


	public $app;

	public function instatiate($app)
	{

		$db = new EloquentContainer($app);
		$db->Eloquent();


		$view = new ViewContainer($app);
		$view->ViewContainer();


		$validator = new ValidatorContainer;
		$validator->validator();
	}



} 
?>