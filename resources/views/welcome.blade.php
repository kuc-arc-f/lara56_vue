<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Styles -->
</head>
<body>
<div class="content">
    <div class="title m-b-md">
        Laravel ,test44
    </div>

    <div id="app">
        <example-component></example-component>
        <hello></hello>
        <hello name="Laravel"></hello>
        <hello name="Vue.js"></hello>
        <!-- -->
        <test1></test1>        
    </div>
</div>
<script src="{{asset('js/app.js')}}?A2"></script>
</body>
</html>
