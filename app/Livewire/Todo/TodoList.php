<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{
    public $title = '';
    public $body = '';
    public $todos = [];

    public function handleSubmit()
    {
        Todo::create(['task' => $this->title]);
        $this->reset('title');
    }

    public function mount()
    {
        $this->title = 'From mount';
        $this->todos = Todo::all()->toArray();
    }

    public function render()
    {
        return view('livewire.todo.todo-list');
    }
}
