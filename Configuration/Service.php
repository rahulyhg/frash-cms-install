<?php
namespace Configuration;

class Service{
	public static function define(){
		return [
			'middleware' => [
			    'isAdmin' => 'CmsBundle@IsAdmin'
            ],
			'service' => [],
			'templating' => [
                'filter' => [],
                'extension' => []
            ]
		];
	}
}