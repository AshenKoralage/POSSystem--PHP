<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 11:48 AM
 */

class Item
{
private $Iid;
private $itemname;
private $price;
private $qty;
private $details;

    /**
     * Item constructor.
     * @param $Iid
     * @param $itemname
     * @param $price
     * @param $qty
     * @param $details
     */
    public function __construct($Iid, $itemname, $price, $qty, $details)
    {
        $this->Iid = $Iid;
        $this->itemname = $itemname;
        $this->price = $price;
        $this->qty = $qty;
        $this->details = $details;
    }

    /**
     * @return mixed
     */
    public function getIid()
    {
        return $this->Iid;
    }

    /**
     * @param mixed $Iid
     */
    public function setIid($Iid)
    {
        $this->Iid = $Iid;
    }

    /**
     * @return mixed
     */
    public function getItemname()
    {
        return $this->itemname;
    }

    /**
     * @param mixed $itemname
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;
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
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }


}