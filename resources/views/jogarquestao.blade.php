<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão</title>
</head>
<body>
<a href="{{route('deletardeck',$deck->id)}}">deletar baralho</a>
@isset($questao)
<h1>Questão{{$questao}}</h2>
@endisset
<a href="{{route('deletardeck',$deck->id)}}">resposta</a>
<a href="{{route('deletardeck',$deck->id)}}">proxima pergunta</a>

</body>
</html>