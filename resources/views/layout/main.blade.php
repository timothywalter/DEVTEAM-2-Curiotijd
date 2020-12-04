<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- @include(public_path('css/header-style.css')) --}}
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="css\header-style.css">
        <link rel="stylesheet" href="css\footer-style.css">
        
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}
    </head>
    <body>
        {{-- set the header --}}
        <header>
          <nav>
            <a href="">Login</a>
            <a href="">Register</a>
            <a href="">Run</a>
            <a href="">Dashboard</a>
            <a href="">Home</a>
          </nav>
        </header>
        {{-- End of header --}}
        {{-- start of content --}}

        <main div="container">
        
          @yield('content')
    
        </main>
    
        {{-- end of content --}}
        {{-- start of footer --}}
        <div class="content">
  
          <div class="push"></div>
        </div>
        
        <footer class="footer">
          <div class="footer-left">
            <a href="">lorem</a><br>
            <a href="">lorem</a><br>
            <a href="">lorem</a><br>
            <a href="">lorem</a>
        </div>
        <div class="footer-right">
            <a href="">lorem</a><br>
            <a href="">lorem</a><br>
            <a href="">lorem</a><br>
            <a href="">lorem</a>
        </div>
        </footer>
        
        {{-- End of footer --}}
    </body>
    
</html>
