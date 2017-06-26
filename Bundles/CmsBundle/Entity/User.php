<?php
namespace Bundles\CmsBundle\Entity;
use Frash\ORM\Entity;

class User extends Entity
{
    protected $id;
    protected $pseudo;
    protected $password;
    protected $mail;
    protected $admin;
    protected $inscription;
    protected $connexion;
}