<?php

namespace Sitephys\PhysmvcBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class ReferenceRepository extends EntityRepository
{

public function getReference()
    {
    }

public function findTitleperDom()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT d.title dtitle, r.title rtitle FROM SitephysPhysmvcBundle:Reference r INNER JOIN SitephysPhysmvcBundle:Domain d WHERE r.domainId = d.id ORDER BY d.id ASC'
            )
            ->getResult();
    }

public function findTitleContentRefDom()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT d.title dtitle, r.title rtitle, r.content rcontent FROM SitephysPhysmvcBundle:Reference r INNER JOIN SitephysPhysmvcBundle:Domain d WHERE r.domainId = d.id ORDER BY d.id ASC'
            )
            ->getResult();
    }

public function findIdTitleReference()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT r.id, r.title FROM SitephysPhysmvcBundle:Reference r ORDER BY r.id ASC'
            )
            ->getResult();
    }

public function findTitleRefperDom($idDom)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT r.title rtitle, r.content rcontent FROM SitephysPhysmvcBundle:Reference r WHERE r.domainId = :iddom')
                ->setParameter('iddom', $idDom)
            ->getResult();
    }

}
