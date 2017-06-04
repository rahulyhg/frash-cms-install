<?php
namespace Configuration;

class Dependencies{
	public static function define(){
		return [
			'controller' => 'Frash\Framework\Controller\Controller',
			'exception' => 'Frash\Framework\Exception\Exception',
			'form' => 'Frash\Framework\Forms\FormFactory',
			'mail' => 'Frash\Framework\Mail\Mailer',
			'microtime' => 'Frash\Framework\Utility\Microtime',
			'orm' => 'Frash\ORM\OrmFactory',
			'redirect' => 'Frash\Framework\Request\Redirect',
			'request' => 'Frash\Framework\Request\Request',
			'response' => 'Frash\Framework\Request\Response',
			'service' => 'Frash\Framework\Request\Service',
			'session' => 'Frash\Framework\Request\Session\Session',
			'trad' => 'Frash\Framework\Controller\TraductionFactory',
			'tpl' => 'Frash\Framework\Controller\Templating'
		];
	}
}