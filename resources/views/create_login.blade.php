<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criar usuario</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="flex items-center justify-center h-screen w-full   bg-slate-300">
<div class="flex flex-col justify-center items-center box-border h-96 w-64 p-4 shadow-2xl space-y-4 bg-neutral-50 ">
<h1 class="titulo">Cadastre-se: </h1>
<h3 class="titulo">Cadastre-se para poder criar flashcards que ajudaram em seus estudos</h3>
<form action="{{route('salvarusuario')}}" method="post" class="form">
@csrf
<label for="name">Nome</label>
<input type="text" name="name" class="border-b-2 border-indigo-600">
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
<label for="email">Email</label>
<input type="text" name="email" class="border-b-2 border-indigo-600">
@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
<label for="age">Idade</label>
<input type="number" name="age" class="border-b-2 border-indigo-600">
@error('age')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
<label for="password">Senha</label>
<input type="password" name="password" class="border-b-2 border-indigo-600">
@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
<button type="submit" class="bg-blue-700">Enviar</button>
</div>
</div>
</form>
</body>
</html>