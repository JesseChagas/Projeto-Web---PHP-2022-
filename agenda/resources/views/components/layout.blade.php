<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/291706862f.js"; crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"; integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container">

    <div class="jumbotron"> 
        <h1>{{$title}}</h1>
    </div>
    {{$slot}}
    <div class="footer">
        <span>
            <br>
            <p class="bg-warning text-white text-center">Agenda IFPB - Direitos reservados &copy; - 2022</p>
        </span>
    </div>
</div>
   
</body>
</html>