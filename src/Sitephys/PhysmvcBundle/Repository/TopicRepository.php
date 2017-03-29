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
                'SELECT t.id FROM SitephysPhysmvcBundle:Topic t ORDER BY t.id ASC'
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

    public function findIdTitleModeTopic()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT t.id, t.title, t.mode FROM SitephysPhysmvcBundle:Topic t ORDER BY t.id ASC'
            )
            ->getResult();
    }

    public function findIdTitleLastTopic()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT t.id, t.title FROM SitephysPhysmvcBundle:Topic t ORDER BY t.date DESC'
            )
            ->setMaxResults(10)
            ->getResult();
    }

    public function findIdContentTopic($ktype, $domid)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT t.id, t.content FROM SitephysPhysmvcBundle:Topic t WHERE (t.domainId = :domid AND t.mode = :mode)'
                )
                ->setParameter('domid', $domid)
                ->setParameter('mode', $ktype)
            ->getResult();

    }

}