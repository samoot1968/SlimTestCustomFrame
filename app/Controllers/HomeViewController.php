<?php 

namespace App\Controllers;
use App\Models\User;


class HomeViewController extends Controller
{


	public function HomeView($request, $response)
	{
		
		$users = User::all();
		return $this->view->render($response, 'home.twig', ['users' => $users]);
	}





}

?>
