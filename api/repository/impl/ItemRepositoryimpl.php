<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 11:48 AM
 */

class ItemRepositoryimpl implements ItemRepository
{

    public function addItem(Item $item): bool
    {
        return($this->connection->query(
            "INSERT INTO item VALUES(
            '{$item->getIid()}',
            '{$item->getItemname()}',
            '{$item->getPrice()}',
            '{$item->getQty()}',
            '{$item->getDetails()}')"
        )>0);
    }

    public function deleteItem(Item $iid): bool
    {
        return($this->connection->query(
                "DELETE FROM item WHERE Iid='{$iid->getIid()}'"
            )>0);
    }

    public function updateItem(Item $item): bool
    {
        return($this->connection->query(
            "UPDATE item SET 
            itemname='{$item->getItemname()}',
            price='{$item->getPrice()}',
            qty='{$item->getQty()}',
            details='{$item->getDetails()}' 
            WHERE Iid='{$item->getIid()}'"
        )>0);

    }

    public function searchItem(Item $iid): Item
    {
        // TODO: Implement searchItem() method.
    }

    public function getAllItems(): array
    {
        // TODO: Implement getAllItems() method.
    }
private $connection;
    public function setConnection(mysqli $connection)
    {
       $this->connection=$connection;
    }
}