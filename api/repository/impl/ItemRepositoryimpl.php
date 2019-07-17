<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 11:48 AM
 */
require_once __DIR__ . "/../ItemRepository.php";
require_once __DIR__ . "/../../dto/Item.php";
require_once __DIR__ . "/../../db/DBConnection.php";

class ItemRepositoryimpl implements ItemRepository
{
    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
    }

    public function addItem(Item $item): bool
    {
        return ($this->connection->query(
                "INSERT INTO item VALUES(
            '{$item->getIid()}',
            '{$item->getItemname()}',
            '{$item->getPrice()}',
            '{$item->getQty()}',
            '{$item->getDetails()}')"
            ) > 0);
    }

    public function deleteItem(Item $iid): bool
    {
        return ($this->connection->query(
                "DELETE FROM item WHERE Iid='{$iid->getIid()}'"
            ) > 0);
    }

    public function updateItem(Item $item): bool
    {
        return ($this->connection->query(
                "UPDATE item SET 
            itemname='{$item->getItemname()}',
            price='{$item->getPrice()}',
            qty='{$item->getQty()}',
            details='{$item->getDetails()}' 
            WHERE Iid='{$item->getIid()}'"
            ) > 0);

    }

    public function searchItem(Item $iid): Item
    {
        // TODO: Implement searchItem() method.
    }

    public function getAllItems(): array
    {
        $resultSet = $this->connection->query("SELECT * FROM item");
        return $resultSet->fetch_all();
    }

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }
}