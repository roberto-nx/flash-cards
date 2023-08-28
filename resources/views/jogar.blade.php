<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Questão</title>
    @livewireStyles
</head>

<body class="flex justify-center bg-gray-400">
<div class="grid grid-cols-1 gap-4 grid-rows-4 justify-items-center">
<div class="flex flex-col justify-center items-center  h-200 w-64 p-4  space-y-4 mt-10 row-start-1 shadow-2xl bg-neutral-50">
@livewire('play',['deck' => $deck])
@livewireScripts
<form action="{{route('deletardeck',$deck['id'])}}" method="Post" class="  ml-2">
@csrf
@method('DELETE')
<button type="submit" class="bg-red-600">Deletar deck</button>
</form>
</div>
<div>
</body>
<script>

</script>

</html>