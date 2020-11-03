@extends('app')

@section('title', 'A propos | ' . config('app.name'))


@section('content')

        <img src="/image/Teacher-du-net-logo-1.png" alt="Logo des Teachers du Net">

        <p>Conçu avec &hearts; par Nicolas Tarbouriech</p>

        <p><a href="{{ route('home') }} ">Revenir à la page d'accueil</a></p>
    
@endsection
