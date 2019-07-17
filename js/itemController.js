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
    })
});