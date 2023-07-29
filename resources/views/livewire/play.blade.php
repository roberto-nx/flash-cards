<div>
    

<h3>{{$deck["title"]}}<h3>
<h3>{{$pergunta}}<h3>
@if($show)
<h3>{{$resposta}}<h3>
<button type="button" wire:click="hide">ocutar resposta</button>
@else
<button type="button" wire:click="show">mostrar resposta</button>
@endif
<button type="button" wire:click="delete">deletar pergunta</button>
@if($count<=48)
<button type="button" wire:click="next">proxima pergunta</button>
@endif
@if($count>2)
<button type="button" wire:click="previous"> pergunta anterior</button>
@endif
<h3>{{$count}}</h3>
</div>

