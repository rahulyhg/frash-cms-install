<?php
namespace Configuration;

class Service{
	public static function define(){
		return [
			'middleware' => [],
			'service' => [],
			'templating' => [
                'filter' => [],
                'extension' => []
            ]
		];
	}
}