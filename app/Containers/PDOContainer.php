<?php 

namespace App\Containers;
use PDO;

class PDOContainer
{


	protected $c;

	public function __construct($c)
	{
		$this->c = $c;
	}

	public function db()
	{
		$container = $this->c->getContainer();

		$container['db'] = function(){

			return new PDO('mysql:host=localhost;dbname=slim','root','');

		};
		
	}


}



 ?>