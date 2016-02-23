// JQuery implementation
$(document).ready(function () {
	"use strict";

	// ------------------------------------------------------------ event handlers
	function onFieldCheck(e) {
        // check if something in each textbox
        if (($("#txtName").val().length > 0) && ($("#txtAddress").val().length > 0) && ($("#txtCity").val().length > 0)) {
            $("#btnSubmit").prop("disabled", false);
        } else {
            $("#btnSubmit").prop("disabled", true);
        }
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
        data: ["Dartmouth", "Halifax", "Fall River", "Sackville", "Bedford", "Elmsdale", "Wellington", "Enfield", "Truro", "Bible Hill"]
    };
    $("#txtCity").easyAutocomplete(options);

    // setup draggable and droppable toppings functionality
    // not all plugins require JQuery
    dragula([document.querySelector("#toppings"), document.querySelector("#selected")], { revertOnSpill: true });

    // form validation (along with maxLengths)
    $("#btnSubmit").click(
        function () {
            window.alert("Package the data and send via AJAX");
        }
    );

    // disable the submit button
    $("#btnSubmit").prop("disabled", true);
    $("#txtName").on("input", onFieldCheck);
    $("#txtAddress").on("input", onFieldCheck);
    $("#txtCity").on("input", onFieldCheck);
});
