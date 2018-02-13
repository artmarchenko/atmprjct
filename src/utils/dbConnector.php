<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 13.02.18
 * Time: 19:11
 */

namespace atm;

use Exception;
use mysqli;

include("../DbProperties.php");



class dbConnector extends DbProperties
{


    public function dbConnect()
    {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->dbName);

        if ($conn->connect_error) {

            throw new Exception("Connection failed: ".$conn->connect_error);

        }
        else {

            return $conn;
        }
    }

}


    