<?php
/**
 * Created by PhpStorm.
 * User: art
 * Date: 12.02.18
 * Time: 21:13
 */

namespace atm;


class Ticket
{


    private $ticketId;

    private $voyageId;

    private $routeId;

    private $departureDate;

    private $arrivalDate;

    private $passangerId;

    private $seatNumber;

    private $status;

    private $price;

    /**
     * Ticket constructor.
     * @param $ticketId
     * @param $voyageId
     * @param $routeId
     * @param $departureDate
     * @param $arrivalDate
     * @param $passangerId
     * @param $seatNumber
     * @param $status
     * @param $price
     */
    public function __construct($ticketId, $voyageId, $routeId, $departureDate, $arrivalDate, $passangerId, $seatNumber, $status, $price)
    {
        $this->ticketId = $ticketId;
        $this->voyageId = $voyageId;
        $this->routeId = $routeId;
        $this->departureDate = $departureDate;
        $this->arrivalDate = $arrivalDate;
        $this->passangerId = $passangerId;
        $this->seatNumber = $seatNumber;
        $this->status = $status;
        $this->price = $price;
    }


    /**
     * @return mixed
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * @param mixed $ticketId
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
    }

    /**
     * @return mixed
     */
    public function getVoyageId()
    {
        return $this->voyageId;
    }

    /**
     * @param mixed $voyageId
     */
    public function setVoyageId($voyageId)
    {
        $this->voyageId = $voyageId;
    }



    /**
     * @return mixed
     */
    public function getRouteId()
    {
        return $this->routeId;
    }

    /**
     * @param mixed $routeId
     */
    public function setRouteId($routeId)
    {
        $this->routeId = $routeId;
    }

    /**
     * @return mixed
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param mixed $departureDate
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

    /**
     * @return mixed
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @param mixed $arrivalDate
     */
    public function setArrivalDate($arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
    }

    /**
     * @return mixed
     */
    public function getPassangerId()
    {
        return $this->passangerId;
    }

    /**
     * @param mixed $passangerId
     */
    public function setPassangerId($passangerId)
    {
        $this->passangerId = $passangerId;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * @param mixed $seatNumber
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
    }



}
?>