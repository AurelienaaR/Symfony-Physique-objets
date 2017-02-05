<?php

namespace Sitephys\PhysmvcBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class PhysaddtopicRepository extends EntityRepository
{

  public function getPhysaddtopic()
  {

  }

public function findIdTitlePhysaddtopic()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT a.id, a.title FROM SitephysPhysmvcBundle:Physaddtopic a ORDER BY a.id ASC'
            )
            ->getResult();
    }

}
