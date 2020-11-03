@extends('layouts.app')

@section(config('app.name'))


@section('content')
    <img src="{{ asset('/image/flag-France.png')}}" height="100" width="200" alt="Drapeau Français"
     class="mt-12 rounded shadow h-32">
    
    <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Bonjour de Montpellier</h1>
    
    <p class="text-lg text-gray-800">Il est {{ date('h:i A') }}.</p>
@endsection

