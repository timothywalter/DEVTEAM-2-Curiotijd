@php
$public = 'http://localhost/stage-opdracht/public';
@endphp

@auth
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link rel="stylesheet" href="<?=$public?>/css/footer-style.css"> 
        <link rel="stylesheet" href="<?=$public?>/css/header-style.css"> 
        
    </head>
    <body>
        {{-- set the header --}}
        <header>
          <p>.</p>
          <br>
          <nav>
            <a href="">Login</a>
            <a href="">Register</a>
            <a href="">Tasks</a>
            <a href="dashboard">Dashboard</a>
            <a href="/logout">Logout</a>
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
        

        
        {{-- End of footer --}}
    </body>
    
</html>
@endauth