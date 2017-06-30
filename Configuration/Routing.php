<?php
namespace Configuration;
use Frash\Framework\Routing\Router;

class Routing extends Router
{
	public function __construct()
	{
		$this->group([ 'bundle' => 'CmsBundle' ], function(){
		    $this->group([ 'middleware' => 'isAdmin' ], function(){
		        $this->get('administration', 'AdminController:adminAction');
            });

			$this->get('article', 'ArticleController:articleAction');
			$this->get('deconnexion', 'HomeController:deconnexionAction');
			$this->get('home', 'HomeController:homeAction', [ 'default' => true ]);

			$this->post('connexion', 'HomeController:connexionAction');
			$this->post('inscription', 'HomeController:inscriptionAction');

			$this->get('install', 'InstallController:installAction');
			$this->post('final_install', 'InstallController:installFinalAction');
		});
	}
}