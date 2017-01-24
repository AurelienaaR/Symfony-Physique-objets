<?php

namespace Sitephys\PhysmvcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="physdb_physupdate")
 * @ORM\Entity(repositoryClass="Sitephys\PhysmvcBundle\Repository\PhysupdateRepository")
 */
class Physupdate
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
  * @ORM\Column(name="idphys", type="integer")
   */
  private $idphys;

  /**
   * @var string
   *
   * @ORM\Column(name="title", type="string")
   */
  private $title;

  /**
   * @var string
   *
   * @ORM\Column(name="author", type="string")
   */
  private $author;

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
   * @var text
   *  
   * @ORM\Column(name="evaluation", type="text", nullable=true)
   */
  private $evaluation;

  /**
   * @var string
   *  
   * @ORM\Column(name="document", type="string", nullable=true)
   */
  private $document;

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
   * @param int $idphys
   */
  public function setIdphys($idphys)
  {
    $this->idphys = $idphys;
  }

  /**
   * @return int
   */
  public function getIdphys()
  {
    return $this->idphys;
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
   * @param string $author
   */
  public function setAuthor($author)
  {
    $this->author = $author;
  }

  /**
   * @return string
   */
  public function getAuthor()
  {
    return $this->author;
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
   * @param text $evaluation
   */
  public function setEvaluation($evaluation)
  {
    $this->evaluation = $evaluation;
  }

  /**
   * @return text
   */
  public function getEvaluation()
  {
    return $this->evaluation;
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

}
