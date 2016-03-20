/*jshint browser:true */
/*jshint devel:true */
/*globals angular */

(function() {
    "use strict";

    // declaring the application module
    var app = angular.module("HelloWorld",[]);

    app.controller("HelloController", function(){
        // add a data property
        this.course = data.course;
        this.enteredName = "";
        this.hide = false;
        this.goodBye = function(){
            return "GOOD-BYE!";
        };
    });



    // hard coded JSON data (for now)
    var data = {
        course: {
            name: "Rich Internet Applications",
            instructor: "Sean Morrow",
            students: [
                {
                    id: "w0012345",
                    name: "Geoff White"
                },
                {
                    id: "w114578",
                    name: "John MacDonald"
                },
                {
                    id: "w012457",
                    name: "Dan Rutledge"
                },
                {
                    id: "w001178",
                    name: "Kyle Lee"
                }
            ]
        }
    };

}());
