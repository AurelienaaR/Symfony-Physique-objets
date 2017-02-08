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
                'SELECT d.id FROM SitephysPhysmvcBundle:Domain d ORDER BY d.id ASC'
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

public function findDomIdTitle()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT d.id, d.title FROM SitephysPhysmvcBundle:Domain d ORDER BY d.id ASC'
            )
            ->getResult();
    }

   public function findDomTitleById($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT d.title FROM SitephysPhysmvcBundle:Domain d WHERE d.id = ' . $id . ''
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

public function findIdTitleDomain()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT d.id, d.title FROM SitephysPhysmvcBundle:Domain d ORDER BY d.id ASC'
            )
            ->getResult();
    }

public function findIdContentDomain()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT d.id, d.content FROM SitephysPhysmvcBundle:Domain d ORDER BY d.id ASC'
            )
            ->getResult();
    }
}