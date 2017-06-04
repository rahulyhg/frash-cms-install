<?php
namespace Configuration;

class Service{
	public static function define(){
		return [
			'middleware' => [],
			'templating' => [
                'filter' => [],
                'extension' => []
            ]
		];
	}
}