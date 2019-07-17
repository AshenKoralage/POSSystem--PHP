<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 8:23 AM
 */
?>
<?php
require_once __DIR__ . "/../business/impl/CustomerBOImpl.php";
require_once __DIR__ . "/../dto/Customer.php";

$method = $_SERVER["REQUEST_METHOD"];

$customerBo = new CustomerBOImpl();

switch ($method) {

    case "POST":
        $custID = $_POST['cid'];
        $custname = $_POST['name'];
        $custAddress = $_POST['address'];
        $custSalary = $_POST['salary'];
        $custTp = $_POST['tp'];
        $operation = $_POST['operation'];
        switch ($operation) {
            case "saveCustomer":
                $customerTempObject = new Customer($custID, $custname, $custAddress, $custSalary, $custTp);
                $result = $customerBo->addCustomer($customerTempObject);
                if ($result) {
                    echo "Customer Added";
                } else {
                    echo "Customer Not Added";
                }
                break;
            case "deleteCustomer":
                $customerTempObject = new Customer($custID, $custname, $custAddress, $custSalary, $custTp);
                $resultDelete = $customerBo->deleteCustomer($customerTempObject);
                if ($resultDelete) {
                    echo "Customer Deleted";
                } else {
                    echo "Failed To  Delete Customer";
                }
                break;
            case "updateCustomer":
                $customerTempObject = new Customer($custID, $custname, $custAddress, $custSalary, $custTp);
                $resultUpdate = $customerBo->updateCustomer($customerTempObject);
                if ($resultUpdate) {
                    echo "Customer Updated";
                } else {
                    echo "Fail To Update";
                }
                break;
            case "searchCustomer":
                $customerTempObject = new Customer($custID, $custname, $custAddress, $custSalary, $custTp);
                $resulSearch = $customerBo->searchCustomer($custID);
                if (!$resulSearch) {
                    echo "No customers";
                }
                break;

        }
        break;

    case "GET":
        $operation = $_GET['operation'];
        switch ($operation) {

            case "getAllCustomers":
                echo json_encode($customerBo->getAllCustomers());
                break;
//    case "POST":
//        $tempCustomer= new Customer($custID, $custname, $custAddress, $custSalary, $custTp);
//        $resp=$customerBo->addCustomer($tempCustomer);
//        echo $resp;
        }
        break;

}

