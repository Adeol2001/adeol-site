<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
       <h1> Hello page 1</h1>
       <p> heure est {{ date('h:i A') }}</p>
       <p> &copy; Copyright 2020 &middot; <a href="#"> About us </a>   </p>
    </body>
</html>
