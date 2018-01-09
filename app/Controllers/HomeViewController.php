<?php 

namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Models\Users;

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

	

	public function getSomeInformation($request, $response, $args)
	{
		

		$users = $this->c->db->table('test')->get();
		return $this->c->view->render($response, 'profile.twig', ['users' => $users]);

	}



}

 ?>
