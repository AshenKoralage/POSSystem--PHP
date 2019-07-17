<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 8:21 AM
 */
require_once __DIR__ . "/../dto/Customer.php";
interface CustomerBO
{
    public function addCustomer(Customer $customer): bool;

    public function deleteCustomer($custID): bool;

    public function updateCustomer(Customer $customer): bool;

    public function searchCustomer($custID): Customer;

    public function getAllCustomers(): array;
}