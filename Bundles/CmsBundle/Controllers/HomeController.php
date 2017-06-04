<?php
namespace Bundles\CmsBundle\Controllers;
use Frash\Framework\Controller\BaseController;

class HomeController extends BaseController{
	public function homeAction(){
		return $this->tpl->view('home.tpl');
	}
}