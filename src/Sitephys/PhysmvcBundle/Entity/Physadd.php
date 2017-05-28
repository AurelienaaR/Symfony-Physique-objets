<?php

namespace Sitephys\PhysmvcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="physdb_physadd")
 * @ORM\Entity(repositoryClass="Sitephys\PhysmvcBundle\Repository\PhysaddRepository")
 */
class Physadd
{
  /**
   * @var int
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @var string
   *
   * @ORM\Column(name="title", type="string")
   */
  private $title;

  /**
   * @ORM\Column(name="username", type="string", length=255)
   * @Assert\NotBlank()
   * @Assert\Length(
   *      min = 3,
   *      max = 10,
   *      minMessage = "Pseudo de longueur minimale {{ limit }} caractères.",
   *      maxMessage = "Pseudo de longueur maximale {{ limit }} caractères."
   * )
   */
  private $username;

  /**
   * @ORM\Column(name="email", type="string", length=255)
   * @Assert\NotBlank()
   * @Assert\Email()
   */
  private $email;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="date", type="datetime")
   */
  private $date;

  /**
   * @var text
   *
   * @ORM\Column(name="content", type="text")
   */
  private $content;

  /**
   * @var string
   *
   * @ORM\Column(name="weblink", type="string", nullable=true)
   */
  private $weblink;

  public function __construct()
  {
    $this->date         = new \Datetime();
  }

  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }

  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * @param string $username
   */
  public function setUsername($username)
  {
    $this->username = $username;
  }

  /**
   * @return string
   */
  public function getUsername()
  {
    return $this->username;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  /**
   * @param \DateTime $date
   */
  public function setDate($date)
  {
    $this->date = $date;
  }

  /**
   * @return \DateTime
   */
  public function getDate()
  {
    return $this->date;
  }

  /**
   * @param text $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }

  /**
   * @return text
   */
  public function getContent()
  {
    return $this->content;
  }

  /**
   * @param string $weblink
   */
  public function setWeblink($weblink)
  {
    $this->weblink = $weblink;
  }

  /**
   * @return string
   */
  public function getWeblink()
  {
    return $this->weblink;
  }

}
