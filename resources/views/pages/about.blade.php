@extends('app')

@section('title', 'A propos | ' . config('app.name'))


@section('content')
        <p>Conçu avec &hearts; par Nicolas Tarbouriech</p>

        <p><a href="/">Revenir à la page d'accueil</a></p>
    
@endsection

@section('footer')
<p>&copy; Copyright {{date ('Y')}}</p>
@endsection