<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <style>
            html{
                background-color: #eae3c8;
            }
        </style>
        
    </head>
    <body>
        <div id="app">
        <example_component></example_component>

        </div>
    </body>
    <script src="{{ asset('/js/app.js') }}"></script>

</html>
