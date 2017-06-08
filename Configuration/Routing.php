<?php
namespace Configuration;
use Frash\Framework\Routing\Router;

class Routing extends Router
{
	public function __construct()
	{
		$this->group([ 'bundle' => 'CmsBundle' ], function(){
			$this->get('article', 'ArticleController:articleAction');
			$this->get('home', 'HomeController:homeAction');

			$this->get('install', 'HomeController:installAction');
			$this->post('final_install', 'HomeController:installFinalAction');
		});
	}
}