<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Baralho</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex  items-center justify-center h-screen w-full bg-slate-300 ">
    <div  class="flex flex-col justify-center items-center  h-96 w-64 p-4 shadow-2xl space-y-10 bg-neutral-50  ">
   <form action="{{route('gerardeck')}}" method="post" class="form">
    @csrf
   <label for="title">De um nome ao baralho</label>
   <input type="text" name="title" class="border-b-2 border-indigo-600 my-3"></input>
   <label for="description">De uma descrição</label>
   <input type="text" name="description" class="border-b-2 border-indigo-600 my-3"></input>
   <label for="amount">Informe a quantidade de cartas, Quantidade de cartas maxima 50</label>
   <input type="number" name="amount" class="border-b-2 border-indigo-600 my-3"></input>
   <button type="submit" class=" bg-blue-700 " >Enviar</button>
    </form>
</div>
</div>
</body>
</html>