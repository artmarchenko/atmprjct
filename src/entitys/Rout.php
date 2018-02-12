<?php
/**
 * Created by PhpStorm.
 * User: art
 * Date: 12.02.18
 * Time: 22:50
 */

namespace atm;


class Rout
{
    private $id;

    private $direction;

    private $price;

    private $defaultSeats;

    /**
     * Rout constructor.
     * @param $id
     * @param $direction
     * @param $price
     * @param $defaultSeat
     */
    public function __construct($id, $direction, $price, $defaultSeat)
    {
        $this->id = $id;
        $this->direction = $direction;
        $this->price = $price;
        $this->defaultSeats = $defaultSeat;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @param mixed $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDefaultSeats()
    {
        return $this->defaultSeats;
    }

    /**
     * @param mixed $defaultSeats
     */
    public function setDefaultSeats($defaultSeats)
    {
        $this->defaultSeats = $defaultSeats;
    }




}