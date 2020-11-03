@extends('app')

@section('title', 'A propos | ' . config('app.name'))


@section('content')

        <img src="{{ asset('/image/Teacher-du-net-logo-1.png')}}" height="150" width="200" 
        alt="Logo des Teachers du Net" class="my-12 rounded shadow-md">

        <h2 class="mb-5 text-gray-700">Conçu avec <span class="text-pink-500">&hearts;</span> par Nicolas Tarbouriech</h2>

        <p><a href="{{ route('home') }} " class="text-indigo-500 hover:text-indigo-600
                underline" >Revenir à la page d'accueil</a></p>
    
@endsection
