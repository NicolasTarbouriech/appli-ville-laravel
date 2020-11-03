@extends('app')

@section(config('app.name'))


@section('content')
    <img src="/image/drapeau-france.jpg" alt="Drapeau Français">
    <h1>Bonjour de Montpellier</h1>
    
    <p>Il est {{ date('h:i A') }}.</p>
@endsection

