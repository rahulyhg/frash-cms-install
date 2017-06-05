<?php
namespace Bundles\CmsBundle\Controllers;
use Frash\Framework\Controller\BaseController;

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
            	'system' => $this->form->create->select([ [ 'name' => 'system', 'select' => 'default' ], [ 'default' => [ 'value' => 'Système de base de données', 'disabled' => true ], 'MySQL' => 'MySQL', 'PGSQL' => 'PostGreSQL' ] ]),
            	'host' => $this->form->create->text([ 'name' => 'host', 'require' => true, 'id' => 'host_database', 'class' => 'validate', 'value' => 'localhost' ]),
            	'port' => $this->form->create->number([ 'name' => 'port', 'id' => 'port_database' ]),
            	'user_bdd' => $this->form->create->text([ 'name' => 'user_bdd', 'require' => true, 'id' => 'user_database', 'class' => 'validate' ]),
            	'password_bdd' => $this->form->create->password([ 'name' => 'password_bdd', 'id' => 'password_database' ]),
            	'pseudo' => $this->form->create->text([ 'name' => 'pseudo', 'require' => true, 'id' => 'pseudo', 'class' => 'validate' ]),
            	'password' => $this->form->create->password([ 'name' => 'password', 'require' => true, 'id' => 'password', 'class' => 'validate' ]),
            	'format_url' => $this->form->create->select([ [ 'name' => 'format_url', 'require' => true, 'id' => 'format_url', 'select' => 'default' ], [ 'default' => [ 'value' => 'Format de l\'URL des articles', 'disabled' => true ], '1' => 'YY/MM/DD', '2' => 'YYYY/MM/DD', '3' => 'DD/MM/YYYY', '4' => 'ID de l\'article', '5' => 'YYYY-MM-DD-titre-article' ] ]),
            	'submit' => $this->form->create->submit([ 'name' => 'submit', 'value' => 'Créer', 'class' => 'btn btn-default' ]),
            	'end' => '</form>'
			]
		]);
	}
}