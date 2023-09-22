<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gray-400">

@isset($decks)
<h1 class="flex justify-center bg-emerald-400">baralhos</h1>
<br>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 justify-items-center ">
@foreach ($decks as $deck)
<div class="flex flex-col   items-center   h-101 w-64 p-4  bg-neutral-50 shadow-2xl">
<h3>Nome do baralho:{{$deck->title}}</h3>
<br>
<h3>Descrição:{{$deck->description}}</h3>
<br>
<a href="{{route('jogar',$deck->id)}}" class="border-2 border-indigo-600  ml-2 bg-blue-700">Jogar</a>
<br>
<a href="{{route('deletardeck',$deck->id)}}" class="  ml-2 bg-red-600">Deletar</a>
</div>
@endforeach
<a href="{{route('criardeck')}}" class="flex justify-center  bg-blue-700">Criar baralho</a>
</div>
@endisset
@empty($decks)
<h3>nome do baralho:{{$decks}}</h3>
   <h1>Não ha nenhum baralho no momento mas você pode criar um<h1>
   <a href="{{route('criardeck')}}" >Criar baralho</a>
</form>
@endempty
</body>
</html>