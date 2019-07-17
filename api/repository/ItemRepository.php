<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 11:48 AM
 */

interface ItemRepository
{
    public function addItem(Item $item): bool;

    public function deleteItem(Item $iid): bool;

    public function updateItem(Item $iid): bool;

    public function searchItem(Item $item): Item;

    public function getAllItems(): array;

    public function setConnection(mysqli $connection);
}