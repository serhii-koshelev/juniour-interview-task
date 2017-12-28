<?php

namespace AppBundle\Entities;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity
 * @ORM\Table(name="employee")
 */
class Employee
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", name="name")
     */
    private $name;
    /**
     * @ORM\Column(type="string", name="surname")
     */
    private $surname;
    /**
     * @ORM\Column(type="decimal", name="rate")
     */
    private $rate;
    /**
     * @ORM\Column(type="date", name="firstDay")
     */
    private $firstDay;
    /**
     * @ORM\Column(type="string" , nullable=true, name="avatarFileName")
     */
    private $avatarFileName;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string", name="position")
     */
    private $position;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param mixed $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return mixed
     */
    public function getFirstDay()
    {
        return $this->firstDay;
    }

    /**
     * @param mixed $firstDay
     */
    public function setFirstDay(\DateTime $firstDay = null)
    {
        $this->firstDay = $firstDay;
    }

    /**
     * @return mixed
     */
    public function getAvatarFileName()
    {
        return $this->avatarFileName;
    }

    /**
     * @param mixed $avatarFileName
     */
    public function setAvatarFileName($avatarFileName = null)
    {
        $this->avatarFileName = $avatarFileName;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }


}