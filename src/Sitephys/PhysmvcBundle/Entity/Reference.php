<?php

namespace Sitephys\PhysmvcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="physdb_reference")
 * @ORM\Entity(repositoryClass="Sitephys\PhysmvcBundle\Repository\ReferenceRepository")
 */
class Reference
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
   * @ORM\ManyToOne(targetEntity="Domain")
   * @ORM\JoinColumn(name="domainId", referencedColumnName="id")
   */
  private $domainId;

  /**
   * @ORM\Column(name="theory", type="boolean")
   */
  private $theory = true;

  /**
   * @var string
   *
   * @ORM\Column(name="title", type="string", length=255, nullable=false)
   */
  private $title;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="date", type="datetime")
   */
  private $date;

  /**
   * @var text
   *
   * @ORM\Column(name="content", type="text", nullable=true)
   */
  private $content;

  /**
   * @var string
   *
   * @ORM\Column(name="web_links", type="string", nullable=true)
   */
  private $webLinks;


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
   * @param int $domainId
   */
  public function setDomainId($domainId)
  {
    $this->domainId = $domainId;
  }

  /**
   * @return int
   */
  public function getDomainId()
  {
    return $this->domainId;
  }

  /**
   * @param bool $theory
   */
  public function setTheory($theory)
  {
    $this->theory = $theory;
  }

  /**
   * @return bool
   */
  public function getTheory()
  {
    return $this->theory;
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
   * @param string $webLinks
   */
  public function setWebLinks($webLinks)
  {
    $this->webLinks = $webLinks;
  }

  /**
   * @return string
   */
  public function getWebLinks()
  {
    return $this->webLinks;
  }

}
