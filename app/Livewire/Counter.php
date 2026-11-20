<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $value = 0;
    public $number;

    public function increment(){
        $this->value++;
    }

    public function decrement(){
        $this->value--;
    }

    public function incrementByInput(){
        $this->value += $this->number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
