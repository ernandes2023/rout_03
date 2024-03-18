<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lista.css">
    <title>Lista de Produtos</title>
</head>
<body>
    <style >
        table, th, td {
        border: 1px solid white;
        border-collapse: collapse;
        }
        th, td {
        background-color: #96D4D4;
        }
        body {
        background-color: powderblue;
        }
        
    </style>
    <h1 style="color:blue;"> Relação de produtos " Tabela "</h1>

    <table>
        <tr>
            <td>Descrição</td>
            <td>Categoria</td>
            <td>Preço</td>
            
        </tr>
        <tr>
            <td>{{$lastname}}</td>
            <td>verdura</td>
            <td>R$ 3,00</td>
            
        </tr>
        <tr>
            <td>{{$name}}</td>
            <td>legume</td>
            <td>R$0,70</td>
            
        </tr>
      
        
    </table>
 

</body>
</html>
