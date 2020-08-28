<?php

namespace App\Entity;

use App\Repository\VelocityDataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VelocityDataRepository::class)
 * @Table(name="velocity_data",indexes={@Index(name="search_idx", columns={"second", "carId"})})
 */
class VelocityData
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $carId;

    /**
     * @ORM\Column(type="smallint")
     */
    private $second;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return VelocityData
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCarId()
    {
        return $this->carId;
    }

    /**
     * @param mixed $carId
     * @return VelocityData
     */
    public function setCarId($carId)
    {
        $this->carId = $carId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecond()
    {
        return $this->second;
    }

    /**
     * @param mixed $second
     * @return VelocityData
     */
    public function setSecond($second)
    {
        $this->second = $second;
        return $this;
    }

}
