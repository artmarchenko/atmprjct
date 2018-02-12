<?php
/**
 * Created by PhpStorm.
 * User: art
 * Date: 12.02.18
 * Time: 23:27
 */

namespace atm;


class Voyage
{
    private $id;

    private $date;

    private $ticketsAvailable;

    private $ticketsSold;

    private $seatsAvailable;

    private $priceCoeficient;

    /**
     * Voyage constructor.
     * @param $id
     * @param $date
     * @param $ticketsAvailable
     * @param $ticketsSold
     * @param $seatsAvailable
     * @param $priceCoeficient
     */
    public function __construct($id, $date, $ticketsAvailable, $ticketsSold, $seatsAvailable, $priceCoeficient)
    {
        $this->id = $id;
        $this->date = $date;
        $this->ticketsAvailable = $ticketsAvailable;
        $this->ticketsSold = $ticketsSold;
        $this->seatsAvailable = $seatsAvailable;
        $this->priceCoeficient = $priceCoeficient;
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTicketsAvailable()
    {
        return $this->ticketsAvailable;
    }

    /**
     * @param mixed $ticketsAvailable
     */
    public function setTicketsAvailable($ticketsAvailable)
    {
        $this->ticketsAvailable = $ticketsAvailable;
    }

    /**
     * @return mixed
     */
    public function getTicketsSold()
    {
        return $this->ticketsSold;
    }

    /**
     * @param mixed $ticketsSold
     */
    public function setTicketsSold($ticketsSold)
    {
        $this->ticketsSold = $ticketsSold;
    }

    /**
     * @return mixed
     */
    public function getSeatsAvailable()
    {
        return $this->seatsAvailable;
    }

    /**
     * @param mixed $seatsAvailable
     */
    public function setSeatsAvailable($seatsAvailable)
    {
        $this->seatsAvailable = $seatsAvailable;
    }

    /**
     * @return mixed
     */
    public function getPriceCoeficient()
    {
        return $this->priceCoeficient;
    }

    /**
     * @param mixed $priceCoeficient
     */
    public function setPriceCoeficient($priceCoeficient)
    {
        $this->priceCoeficient = $priceCoeficient;
    }




}