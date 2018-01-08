<?php 	


namespace App\Containers;

use Slim\Views\TwigExtension as TwigExtension;
use Slim\PDO;


class ViewContainer
{


	public $app;

	public function __construct($app)
	{
		$this->app = $app;
	}


	public function ViewContainer()
	{

		$container = $this->app->getContainer();

		$container['view'] = function ($container) {
		    $view = new \Slim\Views\Twig('public/resource/views', [
		        'cache' => false,
		        'auto_reload' => true
		    ]);
		    
		    // Instantiate and add Slim specific extension
		    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
		    $view->addExtension(new TwigExtension($container['router'], $basePath));

		    return $view;
		};
	}

}



 ?>