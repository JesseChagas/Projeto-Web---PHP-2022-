<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0,
maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> {{$title}}</title>
<script src="https://kit.fontawesome.com/291706862f.js" crossorigin="anonymous"></script>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.cs
s" integrity="sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="jumbotron">
        <h1>{{$title}}</h1>
    </div>
    
        {{$slot}}
    <br>
    <br>
    <div class=footer>
        <hr>
        <p class="text-center">Pobreflix &copy; - Todos os Diretos Reservados</p>
    </div>

</body>
</html>
   
 