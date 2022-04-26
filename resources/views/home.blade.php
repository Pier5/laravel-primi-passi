<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        header {
            height: 5rem;
            background-color: lightblue;
            display: flex;
            align-items: center;
        }

        .text-head {
            margin-left: 20px;
            margin-right: auto;
        }
       .home-nav {
           display: flex;
           list-style-type: none;
       }

       a {
           text-decoration: none;
       }

       .head-li {
           margin: 0 20px;
           text-transform: uppercase;
           color: black;
       }
    </style>
</head>
<body>
    <header>
        <h1 class="text-head">Pagina di prova</h1>
        <nav>
            <ul class="home-nav">
                <a href="{{ route('PaginaUno') }}"><li class="head-li">Pagina Uno</li></a>
                <a href="{{ route('PaginaDue') }}"><li class="head-li">Pagina Due</li></a>
                <a href="{{ route('PaginaTre') }}"><li class="head-li">Pagina Tre</li></a>
            </ul>
        </nav>
    </header>
    <main>
        <h1>{{ $Hello }}</h1>
        <ul>
            @foreach ($Students as $Student)
                <li>{{ $Student['Name'] }}
                    <ul>
                        <li>{{ $Student['Class']}}</li>
                    </ul>
                </li>
            @endforeach
        </ul>
    </main>
</body>
</html>