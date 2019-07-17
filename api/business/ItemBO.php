<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 11:47 AM
 */
require_once __DIR__ . "/../dto/Item.php";
interface ItemBO
{
    public function addItem(Item $item): bool;

    public function deleteItem($Iid): bool;

    public function updateItem(Item $item): bool;

    public function searchItem($Iid): Item;

    public function getAllItems(): array;
}