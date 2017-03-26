<?php

namespace Sitephys\PhysmvcBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class LevelRepository extends EntityRepository
{

  public function getLevel()
  {

  }

public function findIdLevelsLevel()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT l.id, l.levelBase, l.levelSub FROM SitephysPhysmvcBundle:Level l ORDER BY l.id ASC'
            )
            ->getResult();
    }

public function findPhysLevelContent($physlevel)
    {
        $physLevelArray = unserialize($physlevel);
        $bas = $physLevelArray[0];
        $sub = $physLevelArray[1];
        return $this->getEntityManager()
            ->createQuery(
                'SELECT l.content, l.levelBase FROM SitephysPhysmvcBundle:Level l WHERE (l.levelBase = :bas AND l.levelSub = :sub)'
            )
            ->setParameter('bas', $bas)
            ->setParameter('sub', $sub)
            ->getResult();
    }

public function findPhysLevelIdContent($physlevel)
    {
        $physLevelArray = unserialize($physlevel);
        $bas = $physLevelArray[0];
        $sub = $physLevelArray[1];
        return $this->getEntityManager()
            ->createQuery(
                'SELECT l.id, l.content, l.levelBase, l.levelSub FROM SitephysPhysmvcBundle:Level l WHERE (l.levelBase = :bas AND l.levelSub = :sub)'
            )
            ->setParameter('bas', $bas)
            ->setParameter('sub', $sub)
            ->setMaxResults(1)
            ->getResult();
    }

}