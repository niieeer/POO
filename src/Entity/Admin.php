<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
final class Admin extends Member
{
    /**
     * ORM\Column(type="integer")
     */
    private int $level;

    public function __construct(int $s_i, string $fn, string $ln, int $a, string $m, int $l)
    {
        $this->level = $l;
        parent::__construct($s_i, $fn, $ln, $a, $m);
    }

    public function getFullName(): string
    {
        $fi = $this->getFirstname();

        $ln = $this->getLastname();

        $l = $this->getLevel();

        $fullname = $fi . ' ' . $ln . '' . $l;

        return $fullname;
    }
    /**
     * Get the value of level
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * Set the value of level
     *
     * @return  self
     */
    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }
}
