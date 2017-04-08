<?php

namespace Sitephys\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Sitephys\UserBundle\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */
class User implements UserInterface
{
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(name="username", type="string", length=255, unique=true)
   * @Assert\NotBlank()
   * @Assert\Length(
   *      min = 2,
   *      max = 20,
   *      minMessage = "Pseudo de longueur minimale {{ limit }} caractères.",
   *      maxMessage = "Pseudo de longueur maximale {{ limit }} caractères."
   * )
   */
  protected $username;

  /**
   * @ORM\Column(name="email", type="string", length=255, unique=true)
   * @Assert\NotBlank()
   * @Assert\Email()
   */
  protected $email;

  /**
   * @ORM\Column(name="password", type="string", length=255)
   */
  protected $password;

  /**
   * @ORM\Column(name="interest", type="text", nullable=true)
   */
  protected $interest;

  /**
   * @ORM\Column(name="salt", type="string", length=255, nullable=true)
   */
  protected $salt;

  /**
   * @ORM\Column(name="roles", type="array")
   */
  protected $roles;

  /**
   * @ORM\Column(name="authorized", type="boolean", nullable=true)
   */
  protected $authorized = false;


  /**
   * Get id
   *
   * @return int
   */
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getInterest()
    {
        return $this->interest;
    }

    public function setInterest($interest)
    {
        $this->interest = $interest;
    }

    public function getSalt()
    {
        return null;
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function setAuthorized($authorized)
    {
        $this->authorized = $authorized;
    }

    public function getAuthorized()
    {
        return $this->authorized;
    }

    public function eraseCredentials()
    {
    }

}
