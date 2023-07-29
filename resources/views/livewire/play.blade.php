<div>
    

<h3>{{$deck["title"]}}<h3>
<h3>{{$pergunta}}<h3>
@if($show)
<h3>{{$resposta}}<h3>
<button type="button" wire:click="hide">ocutar resposta</button>
@else
<button type="button" wire:click="show">mostrar resposta</button>
@endif

<button type="button" wire:click="next">proxima pergunta</button>

</div>

