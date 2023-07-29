<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Deck;

class Play extends Component
{

    public $deck;
    public $count= 2;
    public $pergunta;
    public $resposta;
    public $show=0;

    
    public function render()
    {
        return view('livewire.play');
    }

    
    public function mount()
    {
        
        if(!empty($this->deck['card1'])){
        $this->pergunta=$this->deck['card1'];
        $this->resposta=$this->deck['card2'];
    }
       else
       $this->next();
       
    }
    public function next()
    {
        $this->count++;
        if(!empty($this->deck['card'.$this->count])){
       $this->pergunta=$this->deck['card'.$this->count];
       $this->count++;
       $this->resposta=$this->deck['card'.$this->count];
        }
        else{
        $this->count++;
        $this->next();};
    }
    public function previous()
    {
       $this->count=$this->count-3;
       if(!empty($this->deck['card'.$this->count])){
       $this->pergunta=$this->deck['card'.$this->count];
       $this->count++;
       $this->resposta=$this->deck['card'.$this->count];  
       }else{
        $this->count++;
        $this->previous();
       }
    }
    public function show()
    {
        $this->show++;
    }
    public function hide()
    {
        $this->show--;
    }

    public function delete()
    {
      
       $delete=Deck::find($this->deck["id"]);
       $delete->{'card'.$this->count--}="null";
       $delete->{'card'.$this->count}="null";
       $delete->save();
       $this->count++;
       
    }
}
