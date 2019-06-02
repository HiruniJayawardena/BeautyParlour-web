<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 12:20 PM
 */

class Beautician
{
    private $beautyId;
    private $beautyName;

    /**
     * Beautician constructor.
     * @param $beautyId
     * @param $beautyName
     */
    public function __construct($beautyId, $beautyName)
    {
        $this->beautyId = $beautyId;
        $this->beautyName = $beautyName;
    }

    /**
     * @return mixed
     */
    public function getBeautyId()
    {
        return $this->beautyId;
    }

    /**
     * @param mixed $beautyId
     */
    public function setBeautyId($beautyId)
    {
        $this->beautyId = $beautyId;
    }

    /**
     * @return mixed
     */
    public function getBeautyName()
    {
        return $this->beautyName;
    }

    /**
     * @param mixed $beautyName
     */
    public function setBeautyName($beautyName)
    {
        $this->beautyName = $beautyName;
    }




}