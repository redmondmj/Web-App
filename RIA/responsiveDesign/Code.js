// JQuery implementation
$(document).ready(function () {
    "use strict";

    // server sided script
    var submitScript = "submitOrder.ashx";

    // --------------------------------------------------------------- event handlers
    function onFieldCheck(e) {
        // check if something in each textbox
        if (($("#txtName").val().length > 0) && ($("#txtAddress").val().length > 0) && ($("#txtCity").val().length > 0)) {
            $("#btnSubmit").prop("disabled", false);
        } else {
            $("#btnSubmit").prop("disabled", true);
        }
    }

    function onResponse(result, textStatus, xmlhttp) {
        //console.log("response received!");
        $("#txtFeedback").css("display", "inline");
        $("#txtFeedback").delay(2000).fadeOut(500);

        // ------------------------------ CHALLENGE SOLUTION
        // enable submit button again
        $("#btnSubmit").prop("disabled", false);

        // resetting form
        // reset toppings
        $("#selected div").each(function () {
            $("#toppings").append(this);
        });

        // reset radio buttons
        $("input:radio:first").prop("checked", true);
        // reset checkboxes
        $("input:checkbox").prop('checked', false);
        // clear out add textboxes for next entry
        $("input:text").val("");
        // disable submit button again
        $("#btnSubmit").prop("disabled", true);
        // -------------------------------------------------
    }

    function onError(xmlhttp, textStatus) {
        console.log("Error in AJAX");
    }

    // ----------------------------------------------------------- JQuery Implementation
    // setup checked all checkbox
    $("input:checkbox:last").change(
        function () {
            var state = $(this).prop("checked");
            $("input:checkbox").prop("checked", state);
        }
    );

    // setup autocomplete for city textbox using EasyAutoComplete JQuery plugin
    var options = {
        data: ["Dartmouth", "Halifax", "Fall River", "Sackville", "Bedford", "Elmsdale", "Wellington", "Enfield", "Truro", "Bible Hill"]
    };
    $("#txtCity").easyAutocomplete(options);

    // setup draggable and droppable toppings functionality
    // not all plugins require JQuery
    dragula([document.querySelector("#toppings"), document.querySelector("#selected")], { revertOnSpill: true });

    // form validation (along with maxLengths)
    $("#btnSubmit").click(
        function () {
            // disable submit button so user can't submit again
            $("#btnSubmit").prop("disabled", true);

            // APPROACH II - SENDING JSON
            // construct JSON string to send
            var sendJSON = {
                "name": $("#txtName").val(),
                "address": $("#txtAddress").val(),
                "city": $("#txtCity").val(),
                "size": $(":radio:checked").val(),
                "toppings": [],
                "notes": []
            };
            $("#selected div").each(
                function () {
                    sendJSON.toppings.push({ "topping": $(this).text() });
                }
            );
            $("input:checkbox[value!='Check All']:checked").each(
                function () {
                    sendJSON.notes.push({ "note": $(this).val() });
                }
            );

            // JSON.stringify() function. Is found in Chrome, Safari 4, FF3.6, and IE8
            var sendString = JSON.stringify(sendJSON)
            console.log("sending: " + sendString);

            // send request via AJAX along with JSON
            $.ajax({
                type: "POST",
                url: submitScript,
                contentType: "application/json",
                data: sendString,
                success: onResponse,
                error: onError
            });
        }
    );

    // disable the submit button
    $("#btnSubmit").prop("disabled", true);
    $("#txtName").on("input", onFieldCheck);
    $("#txtAddress").on("input", onFieldCheck);
    $("#txtCity").on("input", onFieldCheck);
});
