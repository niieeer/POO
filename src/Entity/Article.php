<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="unique_article", fields={"title", "content"})})
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id_article;
    /**
     * @ORM\Column(type="string")
     */
    private string $title;
    /**
     * @ORM\Column(type="string")
     */
    private string $content;

    public function __construct(string $t, string $content, user $author)
    {
        $this->user = $author;
        $this->content = $content;
        $this->title = $t;
    }
    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of id_article
     *
     * @return int
     */
    public function getIdArticle(): int
    {
        return $this->id_article;
    }

    /**
     * Set the value of id_article
     *
     * @param int $id_article
     *
     * @return self
     */
    public function setIdArticle(int $id_article): self
    {
        $this->id_article = $id_article;

        return $this;
    }
}
