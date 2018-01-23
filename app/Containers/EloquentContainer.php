<?php 

namespace App\Containers;



class EloquentContainer
{

	public $app;

	public function __construct($app)
	{
		$this->app = $app;
	}


	public function Eloquent()
	{
		
		$container = $this->app->getContainer();
		

		$capsule = new \Illuminate\Database\Capsule\Manager;
		$capsule->addConnection($container['settings']['db']);
		$capsule->setAsGlobal();
		$capsule->bootEloquent();

		$container['db'] = function($container)
		{
			return $capsule;
		};
		
	}
	



}

 ?>