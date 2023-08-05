<?php

namespace App\Livewire\Todo;

use Livewire\Component;

class TodoItem extends Component
{
    public $name = '';

    public function render()
    {
        return <<<'HTML'
        <div>
            {{ $name }}
        </div>
        HTML;
    }
}
