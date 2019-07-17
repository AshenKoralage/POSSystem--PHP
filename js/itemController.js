//Item CRUDS
$("#itemsave").click(function () {
    var formData = $("#ItemForm").serialize();
    $.ajax({
        url: "../api/service/ItemService.php",
        method: "POST",
        async: true,
        data: formData + "&operation=saveItem"
    }).done(function (res) {
        alert(res)
        loadAllItems();
    })
});

$("#itemdelete").click(function () {
    var formData = $("#ItemForm").serialize();
    $.ajax({
        url: "../api/service/ItemService.php",
        method: "POST",
        async: true,
        data: formData + "&operation=deleteItem"
    }).done(function (res) {
        alert(res)
        loadAllItems();
    })
});

$("#itemupdate").click(function () {
    var formData = $("#ItemForm").serialize();
    $.ajax({
        url: "../api/service/ItemService.php",
        method: "POST",
        async: true,
        data: formData + "&operation=updateItem"
    }).done(function (res) {
        alert(res)
        loadAllItems();
    })
});

function loadAllItems() {
    $('#itemTBody').empty();
    $.ajax({
        url: "../api/service/ItemService.php",
        method: "GET",
        async: true,
        dataType: "json",
        data: "&operation=getAllItems"
    }).done(function (resp) {

        for (var i in resp) {
            var tempA = resp[i];
            var row = "<tr><td>" + tempA[0] + "<td><td>" + tempA[1] + "<td><td>" + tempA[2] + "<td><td>" + tempA[3] + "<td><td>" + tempA[4] + "</td></tr>";
            $('#itemTBody').append(row);
        }
    });
};
loadAllItems();
