<?php

namespace Sitephys\PhysmvcBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PhysaddtopicRepository extends EntityRepository
{

  public function getPhysaddtopic()
  {

  }

    public function findobj($idobj)
    {
        return $this->getEntityManager()
            ->createQuery('SELECT p FROM SitephysPhysmvcBundle:Physaddtopic p WHERE p.id = :idob')
            ->setParameter('idob', $idobj)
            ->getResult();
    }


    public function findIdTitlePhysaddtopic()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT a.id, a.title FROM SitephysPhysmvcBundle:Physaddtopic a ORDER BY a.id ASC')
            ->getResult();
  }

}
