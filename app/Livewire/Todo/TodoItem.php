<?php

namespace App\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class TodoItem extends Component
{
    public $task;
    public $is_complete;

    public function mount(Todo $todo)
    {
        $this->fill(
            $todo->only('task', 'is_complete'),
        );
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            {{ $task }} - {{ $is_complete }}
        </div>
        HTML;
    }
}
