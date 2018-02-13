<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 13.02.18
 * Time: 18:15
 */

namespace atm;


class User
{
    private $id;

    private $login;

    private $password;

    private $name;

    private $telephon;

    private $roleId;

    private $isLogin;

    /**
     * User constructor.
     * @param $id
     * @param $login
     * @param $password
     * @param $name
     * @param $telephon
     * @param $roleId
     * @param $isLogin
     */
    public function __construct($id, $login, $password, $name, $telephon, $roleId, $isLogin)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->telephon = $telephon;
        $this->roleId = $roleId;
        $this->isLogin = $isLogin;
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
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @param mixed $roleId
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    }

    /**
     * @return mixed
     */
    public function getisLogin()
    {
        return $this->isLogin;
    }

    /**
     * @param mixed $isLogin
     */
    public function setIsLogin($isLogin)
    {
        $this->isLogin = $isLogin;
    }




}