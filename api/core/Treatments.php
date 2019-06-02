<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 12:19 PM
 */

class Treatments
{
    private $treatId;
    private $mainTreatment;
    private $subTreatment;

    /**
     * Treatments constructor.
     * @param $treatId
     * @param $mainTreatment
     * @param $subTreatment
     */
    public function __construct($treatId, $mainTreatment, $subTreatment)
    {
        $this->treatId = $treatId;
        $this->mainTreatment = $mainTreatment;
        $this->subTreatment = $subTreatment;
    }

    /**
     * @return mixed
     */
    public function getTreatId()
    {
        return $this->treatId;
    }

    /**
     * @param mixed $treatId
     */
    public function setTreatId($treatId)
    {
        $this->treatId = $treatId;
    }

    /**
     * @return mixed
     */
    public function getMainTreatment()
    {
        return $this->mainTreatment;
    }

    /**
     * @param mixed $mainTreatment
     */
    public function setMainTreatment($mainTreatment)
    {
        $this->mainTreatment = $mainTreatment;
    }

    /**
     * @return mixed
     */
    public function getSubTreatment()
    {
        return $this->subTreatment;
    }

    /**
     * @param mixed $subTreatment
     */
    public function setSubTreatment($subTreatment)
    {
        $this->subTreatment = $subTreatment;
    }




}