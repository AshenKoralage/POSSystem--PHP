<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 11:49 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS-System</title>
    <link rel="stylesheet" href="../css/bootstrap.css">

    <style>
        #btnsave {
            background-color: blue;
        }

        .form {
            border: 2px solid blue;
            align-content: center;
            width: 500px;
        }

        input {
            width: 300px;
            height: 25px;
        }

        header {
            background-color: gray;
            height: 70px;
            font-size: 50px;
            color: white;
        }

        button {
            height: 25px;
        }


    </style>
</head>
<body>
<a href="Item.php">Item Form</a>
<form id="ItemForm">
    <div class="form">
        <header>Manage Item</header>
        <label id="Iid">Item ID</label><br>
        <input type="text" name="Iid" width="400px"><br><br>
        <label id="name">Item Name</label><br>
        <input type="text" name="itemname" width="400px"><br><br>
        <label id="price">Unit price</label><br>
        <input type="text" name="price" width="400px"><br><br>
        <label id="qty">QTY</label><br>
        <input type="text" name="qty" width="400px"><br><br>
        <label id="details">Other Details</label><br>
        <input type="text" name="details" width="400px"><br><br><br>
        <button type="button" id="itemsave">Save Item</button>
        <button type="button" id="itemdelete">delete Item</button>
        <button type="button" id="itemupdate">Update Item</button>
        <!--<button type="button" id="btnsearch">Search Customer</button>-->
    </div>

</form>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Item Name</th>
        <th scope="col">Unit Price</th>
        <th scope="col">Qty</th>
        <th scope="col">Details</th>
    </tr>
    </thead>
    <tbody>

    </tbody>
</table>
<script src="../jquery-3.4.1.min.js"></script>
<script>
    $("#itemsave").click(function () {
        var formData=$("#ItemForm").serialize();
        $.ajax({
            url: "../api/service/ItemService.php",
            method:"POST",
            async:true,
            data:formData+"&operation=saveItem"
        }).done(function (res) {
            alert(res)
        })
    });

    $("#itemdelete").click(function () {
        var formData=$("#ItemForm").serialize();
        $.ajax({
            url: "../api/service/ItemService.php",
            method:"POST",
            async:true,
            data:formData+"&operation=deleteItem"
        }).done(function (res) {
            alert(res)
        })
    });

    $("#itemupdate").click(function () {
        var formData=$("#ItemForm").serialize();
        $.ajax({
            url: "../api/service/ItemService.php",
            method:"POST",
            async:true,
            data:formData+"&operation=updateItem"
        }).done(function (res) {
            alert(res)
        })
    });
    // $("#btnsearch").click(function () {
    //     var formData=$("#customerForm").serialize();
    //     $.ajax({
    //         url: "../api/service/CustomerService.php",
    //         method:"POST",
    //         async:true,
    //         data:formData+"&operation=searchCustomer"
    //     }).done(function (res) {
    //         alert(res)
    //     })
    // });
</script>
</body>
</html>

