<?php

namespace SimpleThings\EntityAudit\Tests\Fixtures\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ArticleAudit
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue */
    private $id;

    /** @ORM\Column(type="string", name="my_title_column") */
    private $title;

    /** @ORM\Column(type="text") */
    private $text;

    /** @ORM\Column(type="text") */
    private $ignoreme;

    /** @ORM\Column(type="text") */
    private $replacethis;

    /** @ORM\ManyToOne(targetEntity="UserAudit") */
    private $author;

    function __construct($title, $text, $author, $ignoreme, $replacethis = 'This Should Be Replaced')
    {
        $this->title       = $title;
        $this->text        = $text;
        $this->author      =  $author;
        $this->ignoreme    = $ignoreme;
        $this->replacethis = $replacethis;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function setIgnoreme($ignoreme)
    {
        $this->ignoreme = $ignoreme;
    }

    public function setReplacethis($replacethis)
    {
        $this->replacethis = $replacethis;
    }
}
