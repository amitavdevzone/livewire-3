<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class TodoItem extends Component
{
    public $id;
    public $task;
    public $is_complete;

    public function mount(Todo $todo)
    {
        $this->fill(
            $todo->only('id', 'task', 'is_complete'),
        );
    }

    public function render()
    {
        return <<<'HTML'
        <li class="list-group-item">
            <a href="{{ route('todo.view', $id) }}">{{ $task }} - {{ $is_complete }}</a>
        </li>
        HTML;
    }
}
