<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Locked;
use Livewire\Component;

class TodoView extends Component
{
    #[Locked]
    public $id;
    public $task;
    public Todo $todo;

    public function handleSubmit()
    {
        $todo = Todo::findOrFail($this->id);
        $todo->task = $this->task;
        $todo->save();
    }

    public function mount(Todo $todo)
    {
        $this->fill($todo->only('id', 'task'));
        $this->todo = $todo;
    }

    public function render()
    {
        return view('livewire.todo-view');
    }
}
