<?php
namespace Bundles\CmsBundle\Controllers;
use Configuration\Database as DatabaseConfig;
use Frash\Framework\Controller\BaseController;
use Frash\Framework\Request\Request;
use FrashCms\Install\{ Config, Database, Routing };

class HomeController extends BaseController
{
	public function homeAction()
	{
		return $this->tpl->view('home.tpl');
	}

	public function installAction()
	{
		return $this->tpl->view('install.tpl', [
			'form' => [
				'start' => $this->form->create->init([ 'method' => 'POST', 'action' => 'final_install', 'csrf' => 'yes', 'class' => 'col s12' ]),
            	'title' => $this->form->create->text([ 'name' => 'title', 'require' => true, 'id' => 'title_install', 'class' => 'validate' ]),
            	'system' => $this->form->create->select([ [ 'name' => 'system', 'select' => 'default' ], [ 'default' => [ 'value' => 'Système de base de données', 'disabled' => true ], 'MySQL' => 'MySQL' ] ]),
            	'host' => $this->form->create->text([ 'name' => 'host', 'require' => true, 'id' => 'host_database', 'class' => 'validate', 'value' => 'localhost' ]),
            	'port' => $this->form->create->number([ 'name' => 'port', 'id' => 'port_database' ]),
            	'user_bdd' => $this->form->create->text([ 'name' => 'user_bdd', 'require' => true, 'id' => 'user_database', 'class' => 'validate' ]),
            	'password_bdd' => $this->form->create->password([ 'name' => 'password_bdd', 'id' => 'password_database' ]),
            	'database' => $this->form->create->text([ 'name' => 'database', 'id' => 'name_database', 'require' => true, 'class' => 'validate' ]),
            	'pseudo' => $this->form->create->text([ 'name' => 'pseudo', 'require' => true, 'id' => 'pseudo', 'class' => 'validate' ]),
            	'password' => $this->form->create->password([ 'name' => 'password', 'require' => true, 'id' => 'password', 'class' => 'validate' ]),
            	'format_url' => $this->form->create->select([
            		[ 'name' => 'format_url', 'require' => true, 'id' => 'format_url', 'select' => 'default' ],
            		[
            			'default' => [ 'value' => 'Format de l\'URL des articles', 'disabled' => true ],
            			'1' => 'YY/MM/DD/titre-article',
            			'2' => 'YYYY/MM/DD/titre-article',
            			'3' => 'DD/MM/YYYY/titre-article',
            			'4' => 'YYYY-MM-DD-titre-article',
            			'5' => 'ID de l\'article'
            		]
            	]),
            	'submit' => $this->form->create->submit([ 'name' => 'submit', 'value' => 'Installer', 'class' => 'btn btn-default' ]),
            	'end' => '</form>'
			]
		]);
	}

	public function installFinalAction(Request $request)
	{
		$post = $request->post();
		
		Config::install($post->title, $post->format_url, $this->dic->config);
		Database::install($post->system, $post->host, $post->database, $post->port, $post->user_bdd, $post->password_bdd);
		Routing::install($post->format_url);

		$pdo = null;

		if($post->system == 'MySQL'){
			$pdo = new \PDO('mysql:host='.$post->host.';dbname='. $post->database.';charset=UTF8;', $post->user_bdd, $post->password_bdd, []);
		}
		
		Database::installTables($pdo);
		$id_admin = Database::insertAdmin($pdo, $post->pseudo, $post->password);

		$this->session->set('id', $id_admin);
		return $this->tpl->view('install_final.tpl', [ 'title' => $post->title ]);
	}
}