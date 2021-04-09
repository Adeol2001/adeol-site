<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About-US</title>

    </head>
    <body>
       <h1> About US &hearts;</h1>

       <p> <a href="/"> Page d'acceuil</a> </p>
       <p> &copy; Copyright {{ date('Y') }} &middot; <a href="/about-us"> About us </a>   </p>
    </body>
</html>
