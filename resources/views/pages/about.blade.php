@extends('app')

@section('title', 'A propos | ' . config('app.name'))


@section('content')
        <p>Conçu avec &hearts; par Nicolas Tarbouriech</p>

        <p><a href="{{ route('home') }} ">Revenir à la page d'accueil</a></p>
    
@endsection
