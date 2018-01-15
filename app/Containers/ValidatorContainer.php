<?php 

namespace App\Containers;


class ValidatorContainer
{

	public function validator()
	{
		$container['validator'] = function($container)
		{
			return new App\Validation\Validator;
		}
	}


}





 ?>