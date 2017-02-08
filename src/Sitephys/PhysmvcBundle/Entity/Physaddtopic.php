<?php

namespace Sitephys\PhysmvcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="physdb_physaddtopic")
 * @ORM\Entity(repositoryClass="Sitephys\PhysmvcBundle\Repository\PhysaddtopicRepository")
 */
class Physaddtopic
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
   * @var int
   *
   * @ORM\Column(name="domainid", type="integer")
   */
  private $domainid;

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
   * @ORM\Column(name="contentexpin", type="text")
   */
  private $contentexpin;

  /**
   * @var text
   *
   * @ORM\Column(name="contentth", type="text")
   */
  private $contentth;

  /**
   * @var text
   *
   * @ORM\Column(name="contentexpout", type="text")
   */
  private $contentexpout;

  /**
   * @var text
   *
   * @ORM\Column(name="contentretexpin", type="text")
   */
  private $contentretexpin;

  /**
   * @var text
   *
   * @ORM\Column(name="contentretth", type="text")
   */
  private $contentretth;

  /**
   * @var text
   *
   * @ORM\Column(name="contentretexpout", type="text")
   */
  private $contentretexpout;

  /**
   * @var string
   *  
   * @ORM\Column(name="document", type="string", nullable=true)
   */
  private $document;

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
   * @param int $domainid
   */
  public function setDomainid($domainid)
  {
    $this->domainid = $domainid;
  }

  /**
   * @return int
   */
  public function getDomainid()
  {
    return $this->domainid;
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
   * @param text $contentexpin
   */
  public function setContentexpin($contentexpin)
  {
    $this->contentexpin = $contentexpin;
  }

  /**
   * @return text
   */
  public function getContentexpin()
  {
    return $this->contentexpin;
  }

    /**
   * @param text $contentth
   */
  public function setContentth($contentth)
  {
    $this->contentth = $contentth;
  }

  /**
   * @return text
   */
  public function getContentth()
  {
    return $this->contentth;
  }

  /**
   * @param text $contentexpout
   */
  public function setContentexpout($contentexpout)
  {
    $this->contentexpout = $contentexpout;
  }

  /**
   * @return text
   */
  public function getContentexpout()
  {
    return $this->contentexpout;
  }

  /**
   * @param text $contentretexpin
   */
  public function setContentretexpin($contentretexpin)
  {
    $this->contentretexpin = $contentretexpin;
  }

  /**
   * @return text
   */
  public function getContentretexpin()
  {
    return $this->contentretexpin;
  }

    /**
   * @param text $contentretth
   */
  public function setContentretth($contentretth)
  {
    $this->contentretth = $contentretth;
  }

  /**
   * @return text
   */
  public function getContentretth()
  {
    return $this->contentretth;
  }

  /**
   * @param text $contentretexpout
   */
  public function setContentretexpout($contentretexpout)
  {
    $this->contentretexpout = $contentretexpout;
  }

  /**
   * @return text
   */
  public function getContentretexpout()
  {
    return $this->contentretexpout;
  }

  /**
   * @param string $document
   */
  public function setDocument($document = null)
  {
    $this->document = $document;
  }

  /**
   * @return string
   */
  public function getDocument()
  {
    return $this->document;
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
