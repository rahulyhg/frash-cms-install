<?php
namespace Bundles\CmsBundle\Service;
use Frash\Framework\Request\Service\BaseService;

class IsAdmin extends BaseService
{
    public function define()
    {
        if($this->session->has('cms_user_id')){
            $finder = $this->orm->finder();

            if($finder->findOne('user', $this->session->get('cms_user_id'))->admin == 'yes'){
                return true;
            } else {
                return false;
            }
        } else {
            $this->redirect->route('home')->go();
            return false;
        }
    }
}