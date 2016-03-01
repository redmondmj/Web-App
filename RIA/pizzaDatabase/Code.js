$(document).ready(function () {
    "use strict";

    // server sided script
    var retrieveScript = "http://web.nscctruro.ca/john_macdonald/RIA/retrieveOrder.ashx";
    // JSON data returned from server
    var json;
    // number of orders
    var orderCount;

    // ---------------------------------------------------------- private methods
    function reportMe(){
        // clear out the target div
        $("#output").text("");

        // loop through each object in orders array of JSON
        for (var i=0; i<json.orders.length; i++) {

            // isolate current order object
            var orderData = json.orders[i];
            // clone the order template
            var orderNode = $("#orderTemplate").clone();
            // change the id of orderNode
            $(orderNode).prop("id","order" + i);
            // populate it
            $(orderNode).find("span:first").html((i + 1) + ":");
            $(orderNode).find("div:eq(0)").append(orderData.name + "<br/>" + orderData.address + "<br/>" + orderData.city);
            $(orderNode).find("div:eq(1)").append(orderData.size);

            // append on toppings and notes
            $(orderData.toppings).each(function(){
                $(orderNode).find("div:eq(2)").append(this.topping + "<br/>");
            });
            $(orderData.notes).each(function(){
                $(orderNode).find("div:eq(3)").append(this.note + "<br/>");
            });

            // make the orderNode visible now
            $(orderNode).css("display","block");
            $("#output").append(orderNode);
        }
    }

    // ----------------------------------------------------------- event handlers
    function onResponse(result, textStatus, xmlhttp) {
        console.log("response received! " + xmlhttp.responseText);

        // grab the JSON response from the server
        json = JSON.parse(xmlhttp.responseText);
        // grab number of orders
        orderCount = json.orders.length;
        //console.log("orderCount: " + orderCount);
        if (orderCount > 0){
            reportMe();
        } else {
            $("#content div:last").html("No orders submitted...");
        }
    }

    function onError(xmlhttp, textStatus) {
        console.log("AJAX error");
    }

    // ----------------------------------------------------------- JQuery Implementation
    $("#btnRetrieve").click(
        function () {
            $(this).prop("disabled", true);
            // send request to get pizza orders via JSON
            $.ajax({
                type: "GET",
                url: retrieveScript,
                contentType: "application/json",
                success: onResponse,
                error: onError
            });
        }
    );

});
