$(document).ready(function () {
    $("#create_order").validate({
        rules: {
            full_name: {
                required: true,
                minlength: 6,
                maxlength: 50
            },
            email: {
                required: true,
                minlength: 6,
                maxlength: 25
            },
            number: {
                required: true,
                minlength: 4,
                maxlength: 15
            }
        },
        messages: {
            full_name: {
                required: "Šis laukas būtinas",
                minlength: "Įveskite pilną vardą"
            },
            email: {
                required: "Šis laukas būtinas",
                minlength: "Įveskite veikiantį el. paštą",
                maxlength: "Too long"
            },
            number: {
                required: "Šis laukas būtinas",
                minlength: "Įveskite tikrą telefono numerį",
                maxlength: "Įveskite tikrą telefono numerį"
            }
        },
        highlight: function (element) {
            $(element).parent().addClass('error')
        },
        unhighlight: function (element) {
            $(element).parent().removeClass('error')
        }
    });
});