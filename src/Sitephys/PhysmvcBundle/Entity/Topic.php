<?php

namespace Sitephys\PhysmvcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="physdb_topic")
 * @ORM\Entity(repositoryClass="Sitephys\PhysmvcBundle\Repository\TopicRepository")
 */
class Topic
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
   * @ORM\JoinColumn(name="domain_id", referencedColumnName="id")
   */
  private $domainId;

  /**
   * @var string
   *
   * @ORM\Column(name="title", type="string", nullable=false)
   */
  private $title;

  /**
   * @var text
   *
   * @ORM\Column(name="content", type="text", nullable=true)
   */
  private $content;

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
   * toString
   * @return string
   */
  public function __toString() 
  {
    return $this->getContent();
  }

}