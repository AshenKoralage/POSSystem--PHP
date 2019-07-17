//Customer CRUDS
$("#btnSave").click(function () {
    var formData = $("#customerForm").serialize();
    $.ajax({
        url: "../api/service/CustomerService.php",
        method: "POST",
        async: true,
        data: formData + "&operation=saveCustomer"
    }).done(function (res) {
        alert(res)
        loadData();
    })
});

$("#btnDelete").click(function () {
    var formData = $("#customerForm").serialize();
    $.ajax({
        url: "../api/service/CustomerService.php",
        method: "POST",
        async: true,
        data: formData + "&operation=deleteCustomer"
    }).done(function (res) {
        alert(res)
        loadData();
    })
});

$("#btnUpdate").click(function () {
    var formData = $("#customerForm").serialize();
    $.ajax({
        url: "../api/service/CustomerService.php",
        method: "POST",
        async: true,
        data: formData + "&operation=updateCustomer"
    }).done(function (res) {
        alert(res)
        loadData();
    })
});

function loadData() {
    $('#customerTBody').empty();
    $.ajax({
        url: "../api/service/CustomerService.php",
        method: "GET",
        async: true,
        dataType: "json",
        data: "&operation=getAllCustomers"
    }).done(function (resp) {
        alert(resp);
        for (var i in resp) {
            var tempA = resp[i];
            var row = "<tr><td>" + tempA[0] + "<td><td>" + tempA[1] + "<td><td>" + tempA[2] + "<td><td>" + tempA[3] + "<td><td>" + tempA[4] + "</td></tr>";
            $('#customerTBody').append(row);
        }
    });
};
loadData();
