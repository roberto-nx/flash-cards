<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criar usuario</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <h1 class="titulo">Cadastre-se </h1>
    <h3 class="titulo">cadastre-se para poder criar flashcards que te ajudaram em seus estudos</h3>
<form action="{{route('salvarusuario')}}" method="post" class="form">
@csrf
<label for="name">Nome</label>
<input type="text" name="name">
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
<label for="email">Email</label>
<input type="text" name="email">
@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
<label for="age">Idade</label>
<input type="number" name="age">
@error('age')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
<label for="password">Senha</label>
<input type="password" name="password">
@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
<button type="submit">Enviar</button>
</form>
</body>
</html>