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
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/axios/0.15.3/axios.min.js"></script>

</head>
<body>
<div class="flex-center position-ref full-height">

    <div id="content" class="content">
        <medium  class="form-text text-muted"><a href="/">You can go to JQuery test</a></medium>

        <div class="title m-b-md">
            This is a technical test VUE .
        </div>
        <div id="content">


        </div>
        <form id="formGetDay" @submit.prevent="processForm">
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" class="form-control" id="inputDate" name="date" v-model="date">

                <small  v-bind:class="{ error: isError }" id="dateHelp" class="form-text text-muted"> @{{errorMessage }}</small>
            </div>
            <button id="btnFormGetDay" class="btn btn-primary" type="submit">Submit</button>

        </form>
        <div id="result" class="result">
            Spanish Day: @{{spanishDay }}<br>
            Catalan Day: @{{ catalanDay }}<br>
            Is a leap year: @{{ isLeap }}<br>
        </div>
        <medium  class="form-text ">The JSON response is  in the console DevTools</medium>

    </div>
</div>

<script src="{{ asset('js/indexVue.js') }}"></script>

</body>
</html>
