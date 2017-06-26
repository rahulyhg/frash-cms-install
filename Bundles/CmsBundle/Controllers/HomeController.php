<?php
namespace Bundles\CmsBundle\Controllers;
use Bundles\CmsBundle\Repository\HomeRepository;
use Frash\Framework\Controller\BaseController;
use Frash\ORM\Query\{ Counter, Finder };

class HomeController extends BaseController
{
	public function homeAction(Finder $finder)
	{
		return $this->tpl->view('home.tpl', [
			'user' => ($this->session->has('cms_user_id')) ? $finder->findOne('user', $this->session->get('cms_user_id'))->admin : 'no_connected',
			'title' => $this->dic->config['title'],
			'form' => [
				'start' => $this->form->create->init([ 'method' => 'POST', 'action' => 'search', 'csrf' => 'yes', 'csrf_name' => 'search', 'class' => 'right' ]),
				'search' => $this->form->create->search([ 'name' => 'search', 'require' => true, 'id' => 'search' ]),
				'end' => '</form>'
			],
			'form_connexion' => [
				'start' => $this->form->create->init([ 'method' => 'POST', 'action' => 'connexion', 'csrf' => 'yes', 'csrf_name' => 'connexion', 'id' => 'form_connexion' ]),
				'pseudo' => $this->form->create->text([ 'name' => 'pseudo', 'require' => true, 'id' => 'pseudo_connexion' ]),
				'password' => $this->form->create->password([ 'name' => 'password', 'require' => true, 'id' => 'password_connexion' ]),
				'submit' => $this->form->create->submit([ 'name' => 'submit', 'value' => 'Connexion', 'class' => 'btn' ]),
				'end' => '</form>'
			],
			'form_inscription' => [
				'start' => $this->form->create->init([ 'method' => 'POST', 'action' => 'inscription', 'csrf' => 'yes', 'csrf_name' => 'inscription', 'id' => 'form_inscription' ]),
				'pseudo' => $this->form->create->text([ 'name' => 'pseudo', 'require' => true, 'id' => 'pseudo_inscription' ]),
				'password' => $this->form->create->password([ 'name' => 'password', 'require' => true, 'id' => 'password_inscription' ]),
				'check_password' => $this->form->create->password([ 'name' => 'check_password', 'require' => true, 'id' => 'check_password_inscription' ]),
				'mail' => $this->form->create->email([ 'name' => 'mail', 'require' => true, 'id' => 'mail_inscription' ]),
				'submit' => $this->form->create->submit([ 'name' => 'submit', 'value' => 'Inscription', 'class' => 'btn' ]),
				'end' => '</form>'
			]
		]);
	}

	public function connexionAction(HomeRepository $req, Counter $counter, Finder $finder)
	{
		$post = $this->form->post;

		if($this->form->verif->csrf($post->connexion, 'connexion')){
			if(!$this->form->verif->maxLength($post->pseudo, 40)){ return $this->redirect->route('home')->go(); }
			if(!$this->form->verif->minLength($post->pseudo, 3)){ return $this->redirect->route('home')->go(); }
			if(empty($post->password)){ return $this->redirect->route('home')->go(); }
            if($counter->countByPseudoAndPassword('user', $post->pseudo, sha1($post->password)) != 1){ return $this->redirect->route('home')->go(); }

            $id = $finder->findOneByPseudoAndPassword('user', $post->pseudo, sha1($post->password))->id;
            $req->updConnexion($id);

            $this->session->set('cms_user_id', $id);

            return $this->redirect->route('home')->go();
		} else {
			return $this->redirect->route('home')->go();
		}
	}
}