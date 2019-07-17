<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 11:49 AM
 */
?>
<?php
require_once  __DIR__ ."/../business/impl/ItemBoImpl.php";
require_once __DIR__ ."/../dto/Item.php";
$Iid=$_POST['Iid'];
$itemname=$_POST['itemname'];
$price=$_POST['price'];
$qty=$_POST['qty'];
$details=$_POST['details'];

$operation=$_POST['operation'];
$ItemBo=new ItemBoImpl();
switch ($operation){
    case "saveItem":
        $ItemTempObject=new Item($Iid,$itemname,$price,$qty,$details);
        $result=$ItemBo->addItem($ItemTempObject);
        if($result){
            echo "Item Added";
        }else{
            echo "Item Not Added";
        }
        break;
    case "deleteItem":
        $ItemTempObject=new Item($Iid,$itemname,$price,$qty,$details);
        $resultdelete=$ItemBo->deleteItem($ItemTempObject);
        if ($resultdelete){
            echo "Item Deleted";
        }else{
            echo "Failed To  Delete Item";
        }
        break;
    case "updateItem":
        $ItemTempObject=new Item($Iid,$itemname,$price,$qty,$details);
        $resultUpdate=$ItemBo->updateItem($ItemTempObject);
        if($resultUpdate){
            echo "Item Updated";
        }else{
            echo "Fail To Update";

        }
        break;
    case "searchCustomer":
        $customerTempObject=new Customer($custID,$custname,$custAddress,$custSalary,$custTp);
        $resulSearch=$customerBo->searchCustomer($custID);
        if(!$resulSearch){
            echo "No customers";
        }
        break;
}

