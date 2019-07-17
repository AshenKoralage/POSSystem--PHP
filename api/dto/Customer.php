<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 8:22 AM
 */

class Customer
{
private $custID;
private $custname;
private $custAddress;
private $custSalary;
private $custTp;

    /**
     * Customer constructor.
     * @param $custID
     * @param $custname
     * @param $custAddress
     * @param $custSalary
     * @param $custTp
     */
    public function __construct($custID, $custname, $custAddress, $custSalary, $custTp)
    {
        $this->custID = $custID;
        $this->custname = $custname;
        $this->custAddress = $custAddress;
        $this->custSalary = $custSalary;
        $this->custTp = $custTp;
    }

    /**
     * @return mixed
     */
    public function getCustID()
    {
        return $this->custID;
    }

    /**
     * @param mixed $custID
     */
    public function setCustID($custID)
    {
        $this->custID = $custID;
    }

    /**
     * @return mixed
     */
    public function getCustname()
    {
        return $this->custname;
    }

    /**
     * @param mixed $custname
     */
    public function setCustname($custname)
    {
        $this->custname = $custname;
    }

    /**
     * @return mixed
     */
    public function getCustAddress()
    {
        return $this->custAddress;
    }

    /**
     * @param mixed $custAddress
     */
    public function setCustAddress($custAddress)
    {
        $this->custAddress = $custAddress;
    }

    /**
     * @return mixed
     */
    public function getCustSalary()
    {
        return $this->custSalary;
    }

    /**
     * @param mixed $custSalary
     */
    public function setCustSalary($custSalary)
    {
        $this->custSalary = $custSalary;
    }

    /**
     * @return mixed
     */
    public function getCustTp()
    {
        return $this->custTp;
    }

    /**
     * @param mixed $custTp
     */
    public function setCustTp($custTp)
    {
        $this->custTp = $custTp;
    }



}