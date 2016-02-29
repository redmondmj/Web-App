/*jshint browser:true */
/*jshint devel:true */
/*globals $ */
/*globals dragula */

// JQuery implementation
$(document).ready(function () {
	"use strict";

    // server sided script
    var submitScript = "http://www.seanmorrow.ca/~lessonspace/submitOrder.ashx";

	// ------------------------------------------------------------ event handlers
	function onFieldCheck(e) {
        // check if something in each textbox
        if (($("#txtName").val().length > 0) && ($("#txtAddress").val().length > 0) && ($("#txtCity").val().length > 0)) {
            $("#btnSubmit").prop("disabled", false);
        } else {
            $("#btnSubmit").prop("disabled", true);
        }
    }

    function onResponse(result, textStatus, xmlhttp){
        console.log("response received!");

        // display feedback to user
        $("#txtFeedback").css("display","inline");
        // fade it out over 1/2 second
        $("#txtFeedback").delay(2000).fadeOut(500);

    }

    function onError(xmlhttp, textStatus){
        console.log("Error in AJAX");
    }

	// ------------------------------------------------------------ JQuery Implementation
    // setup checked all checkbox
    $("input:checkbox:last").change(
        function () {
            var state = $(this).prop("checked");
            $("input:checkbox").prop("checked", state);
        }
    );

    // setup autocomplete for city textbox using EasyAutoComplete JQuery plugin
    var options = {
        data: ["Dartmouth", "Halifax", "Fall River", "Sackville", "Bedford", "Elmsdale", "Wellington", "Enfield", "Truro", "Bible Hill"],
        list:{match:{enabled:true}}
    };
    $("#txtCity").easyAutocomplete(options);

    // setup draggable and droppable toppings functionality
    // not all plugins require JQuery
    dragula([document.querySelector("#toppings"), document.querySelector("#selected")], { revertOnSpill: true });

    // form validation (along with maxLengths)
    $("#btnSubmit").click(
        function () {

            /*
            // an example of an object that could be converted to JSON
            var student = {
                "name":"Sean Morrow",
                "id":"w0090347",
                "courses:",[{"title":"RIA"},{"title":"HTML"},{"title":"Database"}]
            };
            */

            // construct JSON object to send to server
            var sendJSON = {
                "name": $("#txtName").val(),
                "address": $("#txtAddress").val(),
                "city": $("#txtCity").val(),
                "size":$("input:radio:checked").val(),
                "toppings": [],
                "notes": []
            };
            $("#selected div").each(
                function(){
                    sendJSON.toppings.push({"topping": $(this).text()});
                }
            );
            $("input:checkbox[value != 'Check All']:checked").each(
                function(){
                    sendJSON.notes.push({"note": $(this).val()});
                }
            );

            // convert JSON object to a string to sending with request
            var sendString = JSON.stringify(sendJSON);
            //console.log("test: " + sendString);

            // send the request to the server with the JSON
            $.ajax({
                type:"POST",
                url: submitScript,
                contentType: "application/json",
                data: sendString,
                success: onResponse,
                error: onerror
            });
        }
    );

    // disable the submit button
    $("#btnSubmit").prop("disabled", true);
    $("#txtName").on("input", onFieldCheck);
    $("#txtAddress").on("input", onFieldCheck);
    $("#txtCity").on("input", onFieldCheck);
});













