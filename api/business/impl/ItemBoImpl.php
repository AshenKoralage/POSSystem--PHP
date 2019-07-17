<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 11:47 AM
 */
require_once  __DIR__ . "/../../dto/Item.php";
require_once  __DIR__ ."/../../repository/ItemRepository.php";
require_once  __DIR__ ."/../../repository/impl/ItemRepositoryimpl.php";
require_once  __DIR__ ."/../../db/DBConnection.php";
require_once  __DIR__ ."/../../business/ItemBO.php";
require_once  __DIR__ ."/../../business/impl/CustomerBOImpl.php";
class ItemBoImpl implements ItemBO
{
    private $itemRepository;

    /**
     * ItemBoImpl constructor.
     */
    public function __construct()
    {
        $this->itemRepository=new ItemRepositoryimpl();
    }


    public function addItem(Item $item): bool
    {
        $connection=(new DBConnection())->getConnection();
        $this->itemRepository->setConnection($connection);
        return $this->itemRepository->addItem($item);
    }

    public function deleteItem($Iid): bool
    {
       $connection=(new DBConnection())->getConnection();
       $this->itemRepository->setConnection($connection);
       return $this->itemRepository->deleteItem($Iid);
    }

    public function updateItem(Item $item): bool
    {
        $connection=(new DBConnection())->getConnection();
        $this->itemRepository->setConnection($connection);
        return $this->itemRepository->updateItem($item);
    }

    public function searchItem($Iid): Item
    {
        // TODO: Implement searchItem() method.
    }

    public function getAllItems(): array
    {
        // TODO: Implement getAllItems() method.
    }
}