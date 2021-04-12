@extends('base')

@section('title','About US | '. config('app.name'))

@section('content')
  
  <img src="{{ asset('img/Bpng.jpg') }}" alt="Image" class="mt-12 rounded shadow-md h-25">

  <h1 class="mb-5 text-gray-700"> About US <span class="text-pink-500"> &hearts;</span> </h1>

  <p class="text-indigo-500 hover:text-indigo-600 underline"> <a href="{{ route('n_home') }}"> Page d'acceuil</a> </p>
      
@endsection
