<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

@isset($msg)
   <p>{{$msg}}</p>
@endisset

    <form action="{{route('loginusuario')}}"  method="post">
    @csrf

        <label for="email"></label>
        <input type="email" name="email" >
        <label for="password"></label>
        <input type="password" name="password">
        <button type="button">Enviar</button>
    </form>
    <a href="{{route('criarusuario')}}">cadastrar<a>

    
</body>
</html>