<?php

namespace App\Entity;

use Falcon\EntityInterface;
 
class Room implements EntityInterface
{
    private $number;
    private $floor;
    private $type;
    private $beds;
    private $hasAirConditioner;
    private $hasTelevision;
    private $costPerNight;
    private $bookings;
  
    //--- vous devez ajouter les getters et setters dans la classe


    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of floor
     */ 
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set the value of floor
     *
     * @return  self
     */ 
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of beds
     */ 
    public function getBeds()
    {
        return $this->beds;
    }

    /**
     * Set the value of beds
     *
     * @return  self
     */ 
    public function setBeds($beds)
    {
        $this->beds = $beds;

        return $this;
    }

    /**
     * Get the value of hasAirConditioner
     */ 
    public function getHasAirConditioner()
    {
        return $this->hasAirConditioner;
    }

    /**
     * Set the value of hasAirConditioner
     *
     * @return  self
     */ 
    public function setHasAirConditioner($hasAirConditioner)
    {
        $this->hasAirConditioner = $hasAirConditioner;

        return $this;
    }

    /**
     * Get the value of hasTelevision
     */ 
    public function getHasTelevision()
    {
        return $this->hasTelevision;
    }

    /**
     * Set the value of hasTelevision
     *
     * @return  self
     */ 
    public function setHasTelevision($hasTelevision)
    {
        $this->hasTelevision = $hasTelevision;

        return $this;
    }

    /**
     * Get the value of costPerNight
     */ 
    public function getCostPerNight()
    {
        return $this->costPerNight;
    }

    /**
     * Set the value of costPerNight
     *
     * @return  self
     */ 
    public function setCostPerNight($costPerNight)
    {
        $this->costPerNight = $costPerNight;

        return $this;
    }

    /**
     * Get the value of bookings
     */ 
    public function getBookings()
    {
        return $this->bookings;
    }

    /**
     * Set the value of bookings
     *
     * @return  self
     */ 
    public function setBookings($bookings)
    {
        $this->bookings = $bookings;

        return $this;
    }
}
