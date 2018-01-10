<?php 


namespace App\Containers;

use App\Containers\ViewContainer;
use App\Containers\PDOContainer;
use App\Containers\EloquentContainer;


class ContainerRegistration
{


	public $app;

	public function instatiate($app)
	{

		$db = new EloquentContainer($app);
		$db->Eloquent();


		$view = new ViewContainer($app);
		$view->ViewContainer();


		$db = new PDOContainer($app);
		$db->db();
			
	}


} 
?>