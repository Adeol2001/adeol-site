<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name') )</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="py-10 flex flex-col justify-between items-center min-h-screen">

        <main role="main" class="flex flex-col justifi-center items-center">
            @yield('content')
        </main>
        

        {{ config('projet.slogan') }}
       
       <footer class="text-gray-400">
           @if(! Route::is('n_about'))
           <p> &copy; Copyright {{ date('Y') }} &middot; <a href="{{ route('n_about') }}" class="text-indigo-500 hover:text-indigo-600 underline"> About us </a> </p>
           @endif
       </footer>
       
    </body>
</html>
