<?php
namespace Configuration;

class Config{
	public static function define(){
		return [
			'env' => 'local',
			'stock_route' => 'yes',
			'racine' => 'home',
			'cache' => [
				'memcached' => [
					'localhost' => '11211'
				],
				'tpl' => 'yes'
			],
			'traduction' => [
				'default' => 'fr',
				'available' => [ 'fr', 'en' ]
			],
			'log' => [
			    'access' => [
			        'activ' => 'yes',
			        'format' => 'continu'
			    ],
			    'ajax' => [
			        'activ' => 'yes',
			        'format' => 'continu'
			    ],
			    'error' => [
			        'activ' => 'yes',
			        'format' => 'continu'
			    ],
			    'request' => [
			        'activ' => 'yes',
			        'format' => 'continu'
			    ]
			]
		];
	}
}