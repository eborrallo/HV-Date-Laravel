<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet" type="text/css">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>




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
                <input type="text" class="form-control" id="inputDate" name="date" value="{{$date}}">
                <small id="dateHelp" class="form-text text-muted">Write a date as format dd-mm-YYYY.</small>
            </div>
        </form>
        <button id="btnFormGetDay" class="btn btn-primary">Submit</button>

        <div id="result" class="result">

        </div>
    </div>
</div>
</body>
</html>
