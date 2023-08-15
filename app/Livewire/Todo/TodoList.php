<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{
    public $todos = [];

    public function mount()
    {
        $this->todos = Todo::all()->toArray();
    }

    public function render()
    {
        return view('livewire.todo.todo-list');
    }
}
