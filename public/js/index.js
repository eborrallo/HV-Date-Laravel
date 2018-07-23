/**
 * Created by Enric on 23/07/2018.
 */
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // Set up an event listener for the  form.
    $('#btnFormGetDay').click(function (event) {

        event.preventDefault(event);
        // Serialize the form data.
        var formData = $('#formGetDay').serialize();
        if (validate()) {
            //Send AJAX-POST
            $.ajax({
                type: 'POST',
                url: "/getDay",
                data: formData,
                success: function (data) {
                    $("#result").html("");
                    $('#result').append('Spanish Day: ' + data.stringDayES + '<br>');
                    $('#result').append('Catalan Day: ' + data.stringDayCAT + '<br>');
                    $('#result').append('Is a leap year: ' + data.isLeap.toString() + '<br>');
                    $("#dateHelp").css('cssText', 'color: none');
                    $("#dateHelp").html('Write a date as format dd-mm-YYYY.');
                },
                error: function (data) {
                    console.log(data)
                    seeError();
                }
            })
        }
    });
    function seeError() {
        $("#result").html("");
        $("#dateHelp").html('The date could not be read, check that it is well written.');
        $("#dateHelp").css('cssText', 'color: red !important');
    }

    function validate() {
        if (!$('#inputDate').val()) {
            seeError()
            return false;
        }
        return true;
    }
})
;
