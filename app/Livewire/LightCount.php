<?php

namespace App\Livewire;

use Livewire\Component;

class LightCount extends Component
{
    public $pourcentage = 10;

    public function upLight(){
        if($this->pourcentage < 100){
            $this->pourcentage += 5;
        }
    }

    public function downLight(){
        if($this->pourcentage > 0)
            $this->pourcentage -= 5;
    }

    public function onLight(){
        $this->pourcentage = 100;
    }

    public function ofLight(){
        $this->pourcentage = 0;
    }

    public function render()
    {
        return view('livewire.light-count');
    }
}
