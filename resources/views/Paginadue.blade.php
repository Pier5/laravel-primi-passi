<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Due</title>
    <style>
        span {
            color: palevioletred;
        }
        a {
            text-decoration: none;
            color: green;
        }
    </style>
</head>
<body>
    <h1>Questa è la pagina <span>DUE</span></h1>
    <a href="{{ url()->previous() }}"><h2>Torna alla Home</h2></a>
</body>
</html>