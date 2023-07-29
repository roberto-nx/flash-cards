<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Play extends Component
{

    public $deck;
    public $count = 2;
    public $pergunta;
    public $resposta;
    public $show=0;

    
    public function render()
    {
        return view('livewire.play');
    }

    
    public function mount()
    {
        $this->pergunta=$this->deck['card1'];
        $this->resposta=$this->deck['card2'];
    }
    public function next()
    {
       $this->count++;
       $this->pergunta=$this->deck['card'.$this->count];
       $this->count++;
       $this->resposta=$this->deck['card'.$this->count];
    }
    public function show()
    {
        $this->show++;
    }
    public function hide()
    {
        $this->show--;
    }
}
