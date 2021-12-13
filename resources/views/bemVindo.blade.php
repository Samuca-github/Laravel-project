<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
    <style>
        h1, h2{
            text-align: center;
        }
        a.button {
            -webkit-appearance: button;
            -moz-appearance: button;
            appearance: button;

            text-decoration: none;
            color: gray;
        }
    </style>
</head>
<body>
    <h1>Primeiro projeto real oficial com laravel!</h1>
    
    <h2> 
        <a class="button" href="{{ url('/pessoas/nome_simples') }}">NOME SIMPLES</a> 
    |
        <a class="button" href="{{ url('/pessoas/nome_completo') }}">NOME COMPLETO</a>
    </h2>
    
</body>
</html>