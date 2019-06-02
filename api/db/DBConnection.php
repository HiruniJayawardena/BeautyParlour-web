<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 12:53 PM
 */

class DBConnection
{
    private $host="127.0.0.1";
    private $userName="root";
    private $password="1234";
    private $database="SweetPixel";
    private $port="3306";

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection=new mysqli($this->host, $this->userName, $this->password, $this->database, $this->port);
    }

    public function getDBConnection(){
        return $this->connection;
    }


}