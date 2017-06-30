<?php
namespace Bundles\CmsBundle\Controllers;
use Frash\Framework\Controller\BaseController;

class AdminController extends BaseController
{
    public function adminAction()
    {
        return $this->tpl->view('admin/home.tpl', [ 'title' => $this->dic->config['title'] ]);
    }
}