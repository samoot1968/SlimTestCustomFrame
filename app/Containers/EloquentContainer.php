<?php 

namespace App\Containers;



class EloquentContainer
{

	public $c;

	public function __construct($c)
	{
		$this->c = $c;
	}




	public function Eloquent()
	{
		
		$container = $this->c->getContainer();
		$container['db'] = function($container)
		{

			$capsule = new \Illuminate\Database\Capsule\Manager;
			$capsule->addConnection($container['settings']['db']);

			$capsule->setAsGlobal();
			$capsule->bootEloquent();

			return $capsule;
		};
		
	}
	



}

 ?>