<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 12:18 PM
 */

class Appointment
{

//    private $appId;
    private $customerName;
    private $email;
    private $cutomerTp;
//    private $treatId;
    private $date;

    /**
     * Appointment constructor.
     * @param $customerName
     * @param $email
     * @param $cutomerTp
     * @param $date
     */
    public function __construct($customerName, $email, $cutomerTp, $date)
    {
        $this->customerName = $customerName;
        $this->email = $email;
        $this->cutomerTp = $cutomerTp;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param mixed $customerName
     */
    public function setCustomerName($customerName): void
    {
        $this->customerName = $customerName;
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
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCutomerTp()
    {
        return $this->cutomerTp;
    }

    /**
     * @param mixed $cutomerTp
     */
    public function setCutomerTp($cutomerTp): void
    {
        $this->cutomerTp = $cutomerTp;
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
    public function setDate($date): void
    {
        $this->date = $date;
    }
//    private $text;

    /**
     * Appointment constructor.
     * @param $appId
     * @param $customerName
     * @param $email
     * @param $cutomerTp
     * @param $treatId
     * @param $date
     * @param $text
     */



}