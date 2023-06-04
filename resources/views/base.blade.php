<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <a class="navbar-home" href="/"><img src="{{ asset('images/logo.svg') }}"></a>
            
            @php
            $route = request()->route()->getName();
            @endphp
            <div class="nav-item-container">
                <ul>
                    <li class="nav-item">
                        <a href="/" @class(['nav-link', 'active' => str_contains($route, 'property.')])>Voir les biens</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


@yield('content')
    
</body>
</html>