<!DOCTYPE html>
<html>
<head>
    <title>Admin- Lista de Categorias</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;

        }

        .container {
            text-align: center;

        }

        .content {
            text-align: left;
            display: inline-block;
        }
        .content ul{
            list-style: none;
        }
        .title {
            font-size: 96px;
        }

    </style>
</head>


<body>
<div class="container">
    <div class="content">

        <h1>Categorias</h1>
        <ul>
            @foreach($categories as $category)
                <li>{{$category->name}}</li>
            @endforeach
        </ul>
    </div>
</div>
</body>
</html>
