<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Olá {{$name}}</h1>
    <br><br>
    @if ($lastname == null)
    <p>Olá {{$name}} </p>
    @else
    <p>Olá {{$name}}  {{$lastname}}</p>
    @endif

</body>
</html>