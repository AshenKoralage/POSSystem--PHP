<?php
/**
 * Created by IntelliJ IDEA.
 * User: Ashen Koralage
 * Date: 7/13/2019
 * Time: 12:08 PM
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
<form id="customerForm">
    <div class="form">
        <header>Manage Customer</header>
        <label id="cid">Customer</label><br>
        <input type="text" name="cid" width="400px"><br><br>
        <label id="name">Customer Name</label><br>
        <input type="text" name="name" width="400px"><br><br>
        <label id="address">Customer Address</label><br>
        <input type="text" name="address" width="400px"><br><br>
        <label id="number">Customer Salary</label><br>
        <input type="text" name="salary" width="400px"><br><br>
        <label id="tp">Telephone Number</label><br>
        <input type="text" name="tp" width="400px"><br><br><br>
        <button type="button" id="btnsave">Save Customer</button>
        <button type="button" id="btndelete">delete Customer</button>
        <button type="button" id="btnupdate">Update Customer</button>
        <!--<button type="button" id="btnsearch">Search Customer</button>-->
    </div>

</form>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Salary</th>
        <th scope="col">Telephone</th>
    </tr>
    </thead>
    <tbody>

    </tbody>
</table>
<script src="../jquery-3.4.1.min.js"></script>
<script>
    $("#btnsave").click(function () {
        var formData=$("#customerForm").serialize();
        $.ajax({
            url: "../api/service/CustomerService.php",
            method:"POST",
            async:true,
            data:formData+"&operation=saveCustomer"
        }).done(function (res) {
            alert(res)
        })
    });

    $("#btndelete").click(function () {
        var formData=$("#customerForm").serialize();
        $.ajax({
            url: "../api/service/CustomerService.php",
            method:"POST",
            async:true,
            data:formData+"&operation=deleteCustomer"
        }).done(function (res) {
            alert(res)
        })
    });

    $("#btnupdate").click(function () {
        var formData=$("#customerForm").serialize();
        $.ajax({
            url: "../api/service/CustomerService.php",
            method:"POST",
            async:true,
            data:formData+"&operation=updateCustomer"
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


