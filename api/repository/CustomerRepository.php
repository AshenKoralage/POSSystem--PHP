<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 8:23 AM
 */
require_once __DIR__ . "/../dto/Customer.php";

interface CustomerRepository
{
    public function addCustomer(Customer $customer): bool;

    public function deleteCustomer(Customer $custID): bool;

    public function updateCustomer(Customer $customer): bool;

    public function searchCustomer(Customer $custID): Customer;

    public function getAllCustomers(): array;

    public function setConnection(mysqli $connection);
}