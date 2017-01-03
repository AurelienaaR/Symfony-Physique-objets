<?php

namespace Sitephys\PhysmvcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="physdb_symbolization")
 * @ORM\Entity(repositoryClass="Sitephys\PhysmvcBundle\Repository\PhysRepository")
 */
class Symbolization
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
   * @ORM\ManyToOne(targetEntity="Level")
   * @ORM\JoinColumn(name="levelkey", referencedColumnName="id")
   */
  private $levelkey;

  /**
   * @var text
   *
   * @ORM\Column(name="content", type="text", nullable=false)
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
   * @param int $levelkey
   */
  public function setLevelkey($levelkey)
  {
    $this->levelkey = $levelkey;
  }

  /**
   * @return int
   */
  public function getLevelkey()
  {
    return $this->levelkey;
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
