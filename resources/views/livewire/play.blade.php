<div class="display: grid">
    

<h3>{{$deck["title"]}}<h3>
<h3 class="row-start-2 my-2">Pergunta:{{$pergunta}}<h3>
@if($show)
<h3 class="my-2  row-start-3">Resposta:{{$resposta}}<h3>
<button type="button" wire:click="hide" class=" my-2 bg-blue-700">Ocutar resposta</button>
<br>
@else
<button type="button" wire:click="show" class="my-2 bg-blue-700">Mostrar resposta</button>
<br>
@endif
<button type="button" wire:click="delete" class="my-2 bg-red-600">Deletar pergunta</button>
<br>
@if($count<=48)
<button type="button" wire:click="next" class="my-2 bg-blue-700">Proxima pergunta</button>
@endif
@if($count>2)
<button type="button" wire:click="previous" class="my-2 bg-blue-700"> Pergunta anterior</button>
@endif

</div>

