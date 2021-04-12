@extends('base')

@section('content')

  <img src="{{ asset('img/Apng.jpg') }}" alt="Image" class="mt-12 rounded shadow-md h-35">

  <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600" > Hello page 1</h1>

  <p class="mt-5 text-lg text-gray-800"> heure est {{ date('h:i A') }}</p>

@endsection
