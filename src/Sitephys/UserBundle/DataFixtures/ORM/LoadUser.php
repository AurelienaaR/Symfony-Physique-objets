<?php

namespace Sitephys\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Sitephys\UserBundle\Entity\User;

class LoadUser implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    $listNames = array('superadmi' => 'ROLE_SUPER_ADMIN', 'admi' => 'ROLE_ADMIN', 'autho' => 'ROLE_AUTHOR', 'use' => 'ROLE_USER');

    foreach ($listNames as $name => $rol) {
      $user = new User;
      $user->setUsername($name);
      $user->setEmail($name.'@ghjk.fr');
      $user->setPlainpassword($name.'pass');
      $user->setSalt('');
      $user->setRoles(array($rol));
      $manager->persist($user);
    }
    $manager->flush();
  }
}