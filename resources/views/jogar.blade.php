<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Questão</title>
    @livewireStyles
</head>

<body>
@livewire('play',['deck' => $deck])
@livewireScripts
<form action="{{route('deletardeck',$deck['id'])}}" method="Post">
@csrf
@method('DELETE')
<button type="submit" >deletar deck</button>
</form>
</body>
<script>

</script>

</html>