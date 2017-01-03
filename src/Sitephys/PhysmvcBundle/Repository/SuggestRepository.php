<?php

namespace Sitephys\PhysmvcBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class SuggestRepository extends EntityRepository
{
  public function getSuggestWithDomain($domain)
  {
    $qb = $this->createQueryBuilder('p');
    $qb
      ->innerJoin('p.domain', 'dom')
      ->addSelect('dom')
    ;

    $qb->setMaxResults($limit);

    return $qb
      ->getQuery()
      ->getResult()
    ;
  }

  public function getSuggestWithLevel($level)
  {
    $qb = $this->createQueryBuilder('p');
    $qb
      ->innerJoin('p.level', 'lev')
      ->addSelect('lev')
    ;

    $qb->setMaxResults($limit);

    return $qb
      ->getQuery()
      ->getResult()
    ;
  }
  
}