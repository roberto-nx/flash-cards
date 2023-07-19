<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js',resources/js/alpine/start.js'])
    <title>Questão</title>
</head>
<body>
<a href="{{route('deletardeck',$deck->id)}}">deletar baralho</a>
@isset($deck)
<div x-data="{$deck}">
<h1 x-text=""></h>
</div>
@endisset
<a href="{{route('deletardeck',$deck->id)}}">resposta</a>
<a href="{{route('deletardeck',$deck->id)}}">proxima pergunta</a>

<scrpt>
</script>
</body>
</html>