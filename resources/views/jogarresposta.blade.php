<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
<a href="{{route('deletardeck',$deck->id)}}">deletar baralho</a>
@isset($resposta)
<h1>Resposta{{$resposta}}</h2>
@endisset
</body>
</html>