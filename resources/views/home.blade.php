<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@isset($decks)
@foreach ($decks as $deck)
<h1>baralhos</h1>
<h3>nome do baralho:{{$deck->nome}}</h3>
<h3>descriço:{{$deck->$descrição}}</h3>
<a href="{{route('deletardeck',$deck->id)}}">deletar</a>
<a href="{{route('jogar',$deck->id)}}">Jogar</a>

@endforeach
@endisset
@empty($decks)
   <h1>Não ha nenhum baralho no momento mas você pode criar um<h1>
   <a href="{{route('criardeck')}}" >Criar baralho</a>
</form>
@endempty
</body>
</html>