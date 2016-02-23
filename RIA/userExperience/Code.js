// JQuery implementation
$(document).ready(function () {
	"use strict";

    // ----------------------------------- event handlers
    function onFieldCheck(e){
        if (($("#txtName").val().length > 0) &&
            ($("#txtAddress").val().length > 0) &&
            ($("#txtCity").val().length > 0)){
            $("#btnSubmit").prop("disabled", false);
        }else{
            $("#btnSubmit").prop("disabled", true);

        }
    }

    // setup the cehcked all checkbox
    $("input:checkbox:last").change(
        function(){
            // what is the current state of the checkbox?
            var state = $(this).prop("checked");
            // set the other checkboxes accordingly
            $("input:checkbox").prop("checked", state);
        });

    // setup the EasyAutoComplete JQuery plugin
    var options = {data:["Dartmouth", "Halifax", "Fall River", "Truro", "Sackville", "Bedford", "Elmsdale", "Bible Hill"], list:{match:{enabled:true}}};
    $("#txtCity").easyAutocomplete(options);

    // setup for dragula plugin
    dragula([document.querySelector("#toppings"),document.querySelector("#selected")], {revertOnSpill:true});

    // form validation (along with maxLengths)
    $("#btnSubmit").click(
        function () {
            window.alert("Package the data and send via AJAX");
        }
    );

    // submit button in disabled by default
    $("#btnSubmit").prop("disabled", true);

    // wire up the listeners
    $("#txtName").on("input", onFieldCheck());
    $("txtAddress").on("input", onFieldCheck());
    $("txtCity").on("input", onFieldCheck());


});
