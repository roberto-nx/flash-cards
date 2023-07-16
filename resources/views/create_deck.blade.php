<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criar deck</title>
</head>
<body>
   <form action="{{route('criardeck')}}" method="post" class="form">
    @csrf
   <label for="title">De um nome ao deck</label>
   <input type="text" name="title"></input>
   <label for="description">De uma descrição</label>
   <input type="text" name="description"></input>
   <label for="amount">Quantidade de cartas maximo 50</label>
   <input type="number" name="amount"></input>
   <button type="submit">Enviar</button>
    </form>
</body>
</html>