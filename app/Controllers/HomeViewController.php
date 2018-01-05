<?php 

namespace App\Controllers;

use Interop\Container\ContainerInterface;


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



}
 ?>
