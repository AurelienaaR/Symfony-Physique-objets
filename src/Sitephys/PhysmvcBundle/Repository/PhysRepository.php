<?php

namespace Sitephys\PhysmvcBundle\Repository;

use Doctrine\ORM\EntityRepository;

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
                'SELECT p.id, p.title, p.level, t.id AS tid FROM SitephysPhysmvcBundle:Phys p, SitephysPhysmvcBundle:Topic t WHERE p.topicId = t.id ORDER BY p.id'
            )
            ->getResult();
    }

}
