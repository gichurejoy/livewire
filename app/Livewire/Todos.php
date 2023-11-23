<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo="";
    public $todos=[
        "Do dishes",
        "Take out trash",
        "Wash clothes",
    ];
public function mount()
{
    dd("hey");
}
    public function add(){
        $this->todos[]=$this->todo;
        //$this->todo= "";
        $this->reset("todo");
    }
    public function render()
    {
        return view('livewire.todos');
    }
}
