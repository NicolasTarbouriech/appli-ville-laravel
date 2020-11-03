<!DOCTYPE html>
<html lang="{{ str_replace ('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  
        <title>@yield('title', config('app.name'))</title>
    </head>
    <body>
       @yield('content')
      
       {{ config('project.slogan')}}

       <footer>@yield('footer')</footer>
    </body>
</html>