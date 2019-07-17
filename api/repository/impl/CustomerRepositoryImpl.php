<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 8:22 AM
 */
require_once __DIR__ ."/../CustomerRepository.php";
require_once  __DIR__ ."/../../dto/Customer.php";
require_once  __DIR__ ."/../../db/DBConnection.php";
class CustomerRepositoryImpl implements CustomerRepository
{
public function __construct()

{
    $this->connection=(new DBConnection())->getConnection();
}

    public function addCustomer(Customer $customer): bool
    {
        return ($this->connection->query(
                "INSERT INTO customer VALUES(
                '{$customer->getCustID()}',
                '{$customer->getCustname()}',
                '{$customer->getCustAddress()}',
                '{$customer->getCustSalary()}',
                '{$customer->getCustTp()}')"
            ) > 0);
    }

    public function deleteCustomer(Customer $custID): bool
    {
        return ($this->connection->query(
                "DELETE FROM customer WHERE custID='{$custID->getCustID()}'"
            ) > 0);
    }

    public function updateCustomer(Customer $customer): bool
    {
        return ($this->connection->query(
                "UPDATE customer SET 
              custname='{$customer->getCustname()}',
              custAddress='{$customer->getCustAddress()}',
              custSalary='{$customer->getCustSalary()}',
              custTp='{$customer->getCustTp()}'
              WHERE custID='{$customer->getCustID()}'"
            ) > 0);
    }

    public function searchCustomer(Customer $custID): Customer
    {

    }

    public function getAllCustomers(): array
    {
        $resultSet = $this->connection->query("SELECT * FROM customer ");
        return $resultSet->fetch_all();
    }

    private $connection;

    public function setConnection(mysqli $connection): void
    {
        $this->connection = $connection;
    }
}