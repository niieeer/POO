<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Interfaces\member as InterfacesMember;

/** @ORM\MappedSuperclass
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="unique_member", fields={"id", "mail"})})
 */
abstract class Member implements InterfacesMember

{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private ?int $id = null;
    /**
     * @ORM\Column(type="integer")
     */
    private int $serviceId;
    /**
     * @ORM\Column(type="string")
     */
    private string $firstname;
    /**
     * @ORM\Column(type="string")
     */
    private string $lastname;
    /**
     * @ORM\Column(type="integer")
     */
    private int $age;
    /**
     * @ORM\Column(type="string")
     */
    private string $mail;

    public function __construct(int $s_i, string $fn, string $ln, int $a, string $m)
    {
        $this->serviceId = $s_i;
        $this->firstname = $fn;
        $this->lastname = $ln;
        $this->age = $a;
        $this->mail = $m;
    }
    public function getArticle()
    {
    }
    /**
     * Get the value of firstname
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of mail
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of serviceId
     */
    public function getServiceId(): int
    {
        return $this->serviceId;
    }

    /**
     * Set the value of serviceId
     *
     * @return  self
     */
    public function setServiceId(int $serviceId): self
    {
        $this->serviceId = $serviceId;

        return $this;
    }
}
