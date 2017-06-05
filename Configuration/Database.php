<?php
namespace Configuration;

class Database{
	public static function define(){
		return [
			'CmsBundle' => [
				'host' => 'localhost',
				'username' => '',
				'password' => '',
				'dbname' => '',
				'system' => '',
				'port' => ''
			]
		];
	}
}