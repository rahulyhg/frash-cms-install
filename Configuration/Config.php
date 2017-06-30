<?php
namespace Configuration;

class Config{
	public static function define(){
		return [
			'env' => 'prod',
			'stock_route' => 'yes',
			'inspecter' => [
			    'activ' => 'no',
			    'request' => [
                    'select' => 'no',
                    'update' => 'no',
                    'insert' => 'no',
                    'delete' => 'no'
                ]
			],
			'cache' => [
				'memcached' => [],
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
			],
			'install' => 'no',
			'title' => '',
			'format' => [
				'article' => '',
				'forum' => ''
			]
		];
	}
}