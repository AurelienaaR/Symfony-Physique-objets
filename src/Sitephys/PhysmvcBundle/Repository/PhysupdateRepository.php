<?php

namespace Sitephys\PhysmvcBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PhysupdateRepository extends EntityRepository
{

  public function getPhysupdate()
  {

  }

public function findAllPhysUpdated()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p.idphys FROM SitephysPhysmvcBundle:Physupdate p ORDER BY p.idphys ASC'
            )
            ->getResult();
    }

}
