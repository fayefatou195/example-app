@extends('base')

@section('title', 'Mon projet Laravel')



@section('content')
       <img src="/img/pays.jpg" alt="mon pays" class="mt-12 rounded shadow-md h-32">
        <h1 class="mt-5 text-3xl font-semibold text-indigo-600">Mon premier projet Laravel</h1>
        <p class="text-lg text-gray-800">L'heure actuel {{ date('h:i A') }}.</p>
       
@endsection