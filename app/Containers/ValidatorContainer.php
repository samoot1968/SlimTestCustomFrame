<?php 

namespace App\Containers;

use App\Controllers\Validation\Validator as Validator;

class ValidatorContainer
{

	protected $app;

	public function  __construct($app)
	{
		$this->app = $app;
	}



	public function validator()
	{
		$container = $this->app->getContainer();

		$container['validator'] = function($container)
		{
			return new Validator;
		};
	}


}





 ?>