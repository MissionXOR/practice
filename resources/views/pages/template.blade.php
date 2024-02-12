<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - @yield('title','Default')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Welcome to My Website</h1>
    </header>
    
    <!-- Navbar -->
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    

    @hasSection('content')
        @yield('content')
    @else
        <h1 style="text-align: center">No Content Found</h1>    
    @endif
        
        <aside>
            @section('side')
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/user">User</a></li>
            </ul>
            @show
        </aside>
    <footer>
        <p>&copy; 2024 X-OR. All rights reserved.</p>
    </footer>

    
    </body>
    </html>