<?php 

namespace App\Controllers;



class HomeViewController extends Controller
{


	public function HomeView($request, $response)
	{
		return $this->view->render($response, 'home.twig');
	}





}

?>
