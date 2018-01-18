<?php 


namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;
use Respect\Validation\Validator as v;

class AuthController extends Controller
{

	public function getSignUp($request,$response)
	{
		return $this->view->render($response, 'layouts/auth/register.twig');
	}

	public function postSignUp($request, $response)
	{

		$validation = $this->validator->validate($request, [
			'email' => v::noWhitespace()->notEmpty(),
			'name' => v::noWhitespace()->notEmpty()->alpha(),
			'password' => v::noWhitespace()->notEmpty()
		]);

		if($validation->failed())
		{
			return $response->withRedirect($this->router->pathFor('Register'));
		}

		$user = User::create([
			'name' => $request->getParam('name'),
			'email' => $request->getParam('email'),
			'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
		]);

		return $response->withRedirect($this->router->pathFor('DashBoard'));
	}

}


 ?>