<?php 

namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Illuminate\Database\Query\Builder;
use App\Models\Users;

class HomeViewController
{


	protected $c;



	public function __construct(ContainerInterface $c)
	{
		$this->c = $c;
	}




	public function HomeView($request, $response)
	{
		return $this->c->view->render($response, 'home.twig');
	}

	




}

?>
