<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>login</title>
</head>
<body>
<div class="flex items-center justify-center h-screen w-full  bg-slate-300 ">
<div class="flex flex-col justify-center items-center box-border h-82 w-64 p-4 shadow-2xl  bg-neutral-50  ">

@isset($msg)
   <p>{{$msg}}</p>
@endisset

    <form action="{{route('loginusuario')}}"  method="post">
    @csrf

        <label for="email" class="ml-2">Email</label>
        <input type="email" name="email" class="border-b-2 border-indigo-600 ml-2" >
        <label for="password"  class="ml-2">Senha</label>
        <input type="password" name="password" class="border-b-2 border-indigo-600 ml-2">
        <button type="submit" class="ml-2  mt-2 bg-blue-700">Entrar</button>
    </form>
    <a href="{{route('criarusuario')}}" class="ml-2 bg-blue-700">Cadastrar<a>

</div>
</div>
</body>
</html>