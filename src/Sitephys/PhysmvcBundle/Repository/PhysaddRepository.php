<?php

namespace Sitephys\PhysmvcBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PhysaddRepository extends EntityRepository
{

  public function getPhysadd()
  {

  }

public function findIdTitlePhysadd()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT a.id, a.title FROM SitephysPhysmvcBundle:Physadd a ORDER BY a.id ASC'
            )
            ->getResult();
    }

}
