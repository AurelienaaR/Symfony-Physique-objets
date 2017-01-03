<?php

namespace Sitephys\PhysmvcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="physdb_level")
 * @ORM\Entity(repositoryClass="Sitephys\PhysmvcBundle\Repository\LevelRepository")
 */
class Level
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
   * @ORM\Column(name="base", type="integer", nullable=false)
   */
  private $levelBase;

  /**
   * @var int
   *
   * @ORM\Column(name="sub", type="integer", nullable=false)
   */
  private $levelSub;

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
   * @param int $levelBase
   */
  public function setLevelBase($levelBase)
  {
    $this->base = $levelBase;
  }

  /**
   * @return int
   */
  public function getLevelBase()
  {
    return $this->base;
  }

  /**
   * @param int $levelSub
   */
  public function setLevelSub($levelSub)
  {
    $this->sub = $levelSub;
  }

  /**
   * @return int
   */
  public function getLevelSub()
  {
    return $this->sub;
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
