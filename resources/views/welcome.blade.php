<!DOCTYPE html>
<html lang="{{ str_replace ('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  
        <title>Salut la ville</title>
    </head>
    <body>
        <h1>Bonjour de Montpellier</h1>
    
    <p>Il est {{ date('h:i A') }}.</p>

        <footer>

            <p>&copy; Copyright {{date ('Y')}} &middot; <a href="#">A propos</a></a></p>
        </footer>
    </body>
</html>