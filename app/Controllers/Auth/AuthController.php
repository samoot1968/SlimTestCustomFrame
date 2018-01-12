<?php 


namespace App\Controllers\Auth;
use App\Controllers\Controller as Controller;


class AuthController extends Controller
{

	public function getSignUp($request, $response)
	{
		return $this->view->render($response, 'layouts/auth/register.twig');
	}

	public function postSignUp()
	{

	}

}


 ?>