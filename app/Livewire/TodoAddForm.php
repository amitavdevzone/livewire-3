<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoAddForm extends Component
{
    public $title = '';

    public function handleSubmit()
    {
        Todo::create(['task' => $this->title]);
        $this->reset('title');
        return redirect()->to('/todos');
    }

    public function render()
    {
        return view('livewire.todo-add-form');
    }
}
