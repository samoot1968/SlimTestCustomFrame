<?php 

namespace App\Controllers;

use Interop\Container\ContainerInterface;
use PDO;

class HomeViewController
{

	protected $c;


	public function __construct(ContainerInterface $c)
	{
		$this->c = $c;

	}


	public function test($request, $response)
	{
		return $this->c->view->render($response, 'home.twig');
	}

	public function getSomeInformation($request, $response)
	{
		$users = $this->c->db->query("SELECT * FROM test")->fetchAll(PDO::FETCH_OBJ);

		var_dump($users);
	}



}
 ?>
