@extends('base')


@section('title', 'About Us | ' . config('app_name'))


@section('content')
<img src="/img/logo.jpg" alt="mon logo" width="100"  class="my-12 mt-12 rounded shadow-md">
       <h2 class="mb-5 text-gray-700">
          Built with<span class="text-pink-500"> &hearts;</span> by DEVELOPPEUR DEDUTANTE
     </h2>
       <p><a href="{{route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline"
       >Revenir à la page d'accueil</a></p>
       
  @endsection