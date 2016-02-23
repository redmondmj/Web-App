// JQuery implementation
$(document).ready(function () {
	"use strict";

    // server sided script
    var submitscript = "http://ftp.nscctruro.ca/john_macdonald/RIA/submitOrder.ashx";

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
        data: ["Dartmouth", "Halifax", "Fall River", "Sackville", "Bedford", "Elmsdale", "Wellington", "Enfield", "Truro", "Bible Hill"], list:{match:{enabled:true}}
    };
    $("#txtCity").easyAutocomplete(options);

    // setup draggable and droppable toppings functionality
    // not all plugins require JQuery
    dragula([document.querySelector("#toppings"), document.querySelector("#selected")], { revertOnSpill: true });

    // form validation (along with maxLengths)
    $("#btnSubmit").click(
        function () {
            var sendJSON = {
                "name":$("#txtName").val(),
                "address": $("#txtAddress").val(),
                "city": $("txtCity").val(),
                "size":$("input:radio:checked").val(),
                "toppings":[],
                "notes":[]

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

            // send the request to the server with JSON
            @.ajax({
             type:"POST",
             url: submitscript,
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
