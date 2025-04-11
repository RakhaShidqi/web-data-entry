$('.customer-btn').click(function(){
    $('nav ul .customer-show').toggleClass("show");
    $('nav ul .first').toggleClass("rotate");
});

$('.subscribe-btn').click(function(){
    $('nav ul .subscribe-show').toggleClass("show");
    $('nav ul .second').toggleClass("rotate");
});

$('nav ul li').click(function(){
    $(this).addClass("active").siblings().removeClass("active");
});

// Datatables - Data Customers
$(document).ready(function() {
    $("#myTable").DataTable({
        "ajax": {
            "url": "data.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "customer_id" },
            { "data": "name" },
            { "data": "email" },
            { "data": "phone" }
        ]
    });
});

// Datatables - Data Subscribe
$(document).ready(function() {
    $("#myTable").DataTable({
        "ajax": {
            "url": "data1.php",
            "dataSrc": ""
        },
        "columns": [
            { "data": "subscriptions_id" },
            { "data": "customer_id" },
            { "data": "service_start_date" },
            { "data": "next_billing_date" },
            { "data": "amount" },
            { "data": "status" }
        ]
    });
});

