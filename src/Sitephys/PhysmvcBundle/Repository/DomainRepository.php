<?php

namespace Sitephys\PhysmvcBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class DomainRepository extends EntityRepository
{
   public function findDomId()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT d.id FROM SitephysPhysmvcBundle:Domain d'
            )
            ->getResult();
    }

   public function findDomTitle()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT d.title FROM SitephysPhysmvcBundle:Domain d'
            )
            ->getResult();
    }

   public function findDomContent()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT d.content FROM SitephysPhysmvcBundle:Domain d'
            )
            ->getResult();
    }

}