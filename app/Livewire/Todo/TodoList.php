<?php

namespace App\Livewire\Todo;

use Livewire\Component;

class TodoList extends Component
{
    public $title = 'Title';

    public $body = 'Body';

    public function render()
    {
        return view('livewire.todo.todo-list');
    }
}
