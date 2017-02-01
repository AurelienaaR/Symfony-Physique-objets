<?php

namespace Sitephys\PhysmvcBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class PhysRepository extends EntityRepository
{

  public function getPhys()
  {

  }


public function findAllPhysUp()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p.id, p.title FROM SitephysPhysmvcBundle:Phys p, SitephysPhysmvcBundle:Physupdate u WHERE u.idphys = p.id ORDER BY p.id ASC'
            )
            ->getResult();
    }



public function findIdTitlePhys()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p.id, p.title FROM SitephysPhysmvcBundle:Phys p ORDER BY p.id ASC'
            )
            ->getResult();
    }

public function findIdTitleLastPhys()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p.id, p.title FROM SitephysPhysmvcBundle:Phys p ORDER BY p.date DESC'
            )
            ->setMaxResults(20)
            ->getResult();
    }
}
