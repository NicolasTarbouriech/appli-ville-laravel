@extends('app')

@section(config('app.name'))


@section('content')
    <h1>Bonjour de Montpellier</h1>
    
    <p>Il est {{ date('h:i A') }}.</p>
@endsection

