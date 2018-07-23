<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet" type="text/css">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
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

                //Send AJAX-POST
                $.ajax({
                    type: 'POST',
                    url:  "/getDay",
                    data: formData,
                    success: function (data) {
                        alert(JSON.stringify(data)); // where html is the key of array that you want, $response['html'] = "<a>something..</a>";
                    },
                    error: function (data) {
//                        var json = $.parseJSON(data);
//                        alert(json.error);
                    }
                })
            });
        });

    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />


</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            This is a technical test .
        </div>
        <form id="formGetDay">
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="date" value="{{$date}}" >
                <small id="dateHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
        </form>
        <button id="btnFormGetDay" class="btn btn-primary">Submit</button>

        <div id="result">
        </div>
    </div>
</div>
</body>
</html>
