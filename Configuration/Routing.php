<?php
namespace Configuration;
use Frash\Framework\Routing\Router;

class Routing extends Router
{
	public function __construct()
	{
		$this->group([ 'bundle' => 'CmsBundle' ], function(){
			$this->get('home', 'HomeController:homeAction');
		});
	}
}