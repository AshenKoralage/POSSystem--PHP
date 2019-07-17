<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 8:21 AM
 */
require_once  __DIR__ . "/../../dto/Customer.php";
require_once  __DIR__ ."/../../repository/CustomerRepository.php";
require_once  __DIR__ ."/../../repository/impl/CustomerRepositoryImpl.php";
require_once  __DIR__ ."/../../db/DBConnection.php";
require_once  __DIR__ ."/../../business/CustomerBO.php";
require_once  __DIR__ ."/../../business/impl/CustomerBOImpl.php";
class CustomerBOImpl implements CustomerBO
{
    private $customerRepository;

    /**
     * CustomerBOImpl constructor.
     */
    public function __construct()
    {
        $this->customerRepository=new CustomerRepositoryImpl();
    }


    public function addCustomer(Customer $customer): bool
    {
        $connection=(new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->addCustomer($customer);
    }

    public function deleteCustomer($custID): bool
    {
       $connection=(new DBConnection())->getConnection();
       $this->customerRepository->setConnection($connection);
       return $this->customerRepository->deleteCustomer($custID);
    }

    public function updateCustomer(Customer $customer): bool
    {
        $connection=(new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->updateCustomer($customer);
    }

    public function searchCustomer($custID): Customer
    {
        $connection=(new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->searchCustomer($custID);
    }

    public function getAllCustomers(): array
    {
        $connection=(new DBConnection())->getConnection();
        $this->customerRepository->setConnection($connection);
        return $this->customerRepository->getAllCustomers();
    }
}