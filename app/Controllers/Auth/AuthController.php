<?php 


namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Models\User;
use Respect\Validation\Validator as v;



class AuthController extends Controller
{



	//This function simply returns register page view. It takes $request and $response as param
	public function getSignUp($request,$response)
	{
		return $this->view->render($response, 'layouts/auth/register.twig');
	}



	//This function takes $request and $response as params. It returns $response with redirect method
	public function postSignUp($request, $response)
	{

		//At first we check with custom validation method, if all fields are meeting configured requirements
		$validation = $this->validator->validate($request, [
			'username' => v::noWhitespace()->notEmpty(),
			'email' => v::noWhitespace()->notEmpty(),
			'name' => v::notEmpty()->alpha(),
			'password' => v::noWhitespace()->notEmpty()
		]);

		//If not, then return to back to register page
		if($validation->failed())
		{
			return $response->withRedirect($this->router->pathFor('Register'));
		}


		//If validation is met, use Eloquent to create user to database users table
		$user = User::create([
			'username' => $request->getParam('username'),
			'name' => $request->getParam('name'),
			'email' => $request->getParam('email'),
			'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
		]);

		return $response->withRedirect($this->router->pathFor('Home'));
	}

}


 ?>