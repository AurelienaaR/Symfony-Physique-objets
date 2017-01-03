<?php

namespace Sitephys\PhysmvcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="physdb_phys")
 * @ORM\Entity(repositoryClass="Sitephys\PhysmvcBundle\Repository\PhysRepository")
 */
class Phys
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
   * @ORM\ManyToOne(targetEntity="Topic")
   * @ORM\JoinColumn(name="topic_id", referencedColumnName="id")
   */
  private $topicId;

  /**
   * @var string
   *
   * @ORM\Column(name="level", type="string", nullable=false)
   */
  private $level;

  /**
   * @var string
   *
   * @ORM\Column(name="title", type="string", length=255, nullable=false)
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

  /**
   * @ORM\Column(name="published", type="boolean")
   */
  private $published = true;

  /**
   * @ORM\Column(name="updated_at", type="datetime", nullable=true)
   */
  private $updatedAt;

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

  public function updateDate()
  {
    $this->setUpdatedAt(new \Datetime());
  }

  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param int $topicId
   */
  public function setTopicId($topicId)
  {
    $this->topic_id = $topicId;
  }

  /**
   * @return int
   */
  public function getTopicId()
  {
    return $this->topicId;
  }

  /**
   * @param string $level
   */
  public function setLevel($level)
  {
    $this->level = $level;
  }

  /**
   * @return string
   */
  public function getLevel()
  {
    return $this->level;
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

  /**
   * @param bool $published
   */
  public function setPublished($published)
  {
    $this->published = $published;
  }

  /**
   * @return bool
   */
  public function getPublished()
  {
    return $this->published;
  }

  /**
   * @param \DateTime $updatedAt
   */
  public function setUpdatedAt(\Datetime $updatedAt = null)
  {
      $this->updated_at = $updatedAt;
  }

  /**
   * @return \DateTime
   */
  public function getUpdatedAt()
  {
      return $this->updatedAt;
  }

  /**
   * @param string $webLinks
   */
  public function setWebLinks($webLinks)
  {
    $this->web_links = $webLinks;
  }

  /**
   * @return string
   */
  public function getWebLinks()
  {
    return $this->webLinks;
  }

}
