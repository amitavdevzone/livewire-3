<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{
    public $title = 'Title';
    public $body = 'Body';
    public $todos = [];

    public function handleSubmit()
    {
        Todo::create(['task' => $this->title]);
    }

    public function mount()
    {
        $this->todos = Todo::all()->toArray();
    }

    public function render()
    {
        return view('livewire.todo.todo-list');
    }
}
