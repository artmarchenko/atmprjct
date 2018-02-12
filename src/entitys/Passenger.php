<?php


namespace atm;


class Passenger
{
    private $id;

    private $name;

    private $secondName;

    private $telephon;

    private $email;

    private $birthDate;

    /**
     * Passenger constructor.
     * @param $id
     * @param $name
     * @param $secondName
     * @param $telephon
     * @param $email
     * @param $birthDate
     */
    public function __construct($id, $name, $secondName, $telephon, $email, $birthDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->secondName = $secondName;
        $this->telephon = $telephon;
        $this->email = $email;
        $this->birthDate = $birthDate;
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
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * @param mixed $secondName
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;
    }

    /**
     * @return mixed
     */
    public function getTelephon()
    {
        return $this->telephon;
    }

    /**
     * @param mixed $telephon
     */
    public function setTelephon($telephon)
    {
        $this->telephon = $telephon;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }




}
?>