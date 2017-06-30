<?php
namespace Bundles\CmsBundle\Repository;
use Frash\ORM\Query\QueryBuilder;

class HomeRepository extends QueryBuilder
{
    public function updConnexion($user)
    {
        $upd = $this->newUpdate('user');
        $upd->update([ 'connexion' => ':date' ])
            ->where('id', ':id')
            ->execute([ date('d/m/Y à H:i:s'), $user ]);
        $this->update($upd);
    }
}