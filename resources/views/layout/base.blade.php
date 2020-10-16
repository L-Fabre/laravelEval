<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/normalize">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a class="button2" href="/">Accueil</a></li>
                <li><a class="button2" href="/statues">Les satues</a></li>
                <li><a class="button2" href="/add">Ajout</a></li>
            </ul>
        </nav>
        <div>
            <h1>InWorld Statues</h1>
        </div>
        
    </header>
    <main>
    
        @yield('content')
    
    </main>
    <footer>
        <div>
            <img src="/img/github.png" alt="">
            L-Fabre
        </div>
           
    </footer>
   
</body>
</html>