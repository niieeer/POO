<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

final class User extends Member
{
    /**
     * @ORM\Column(type="boolean")
     */
    private bool $personnalData;


    public function __construct(int $s_i, string $fn, string $ln, int $a, string $m, bool $d_p)
    {
        $this->personnalData = $d_p;
        parent::__construct($s_i, $fn, $ln, $a, $m);
    }



    public function getFullName(): string
    {
        $fi = $this->getFirstname();

        $l = $this->getLastname();

        $d_p = $this->getPersonnalData();

        $fullname = $fi . ' ' . $l . ' ' . $d_p;

        return $fullname;
    }

    /**
     * Get the value of personnalData
     *
     * @return bool
     */
    public function getPersonnalData(): bool
    {
        return $this->personnalData;
    }
}
