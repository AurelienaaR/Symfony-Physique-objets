<?php

namespace Sitephys\PhysmvcBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class TopicRepository extends EntityRepository
{
   public function findTopId()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT t.id FROM SitephysPhysmvcBundle:Topic t'
            )
            ->getResult();
    }

   public function findTopTitle()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT t.title FROM SitephysPhysmvcBundle:Topic t'
            )
            ->getResult();
    }

   public function findTopContent()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT t.content FROM SitephysPhysmvcBundle:Topic t'
            )
            ->getResult();
    }

}
