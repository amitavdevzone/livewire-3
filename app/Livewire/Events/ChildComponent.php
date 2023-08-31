<?php

namespace App\Livewire\Events;

use Livewire\Attributes\On;
use Livewire\Component;

class ChildComponent extends Component
{
    public string $name = 'Default Child';

    #[On('got-name')]
    public function gotNameChild($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            <p>I am child component</p>
            The name is: {{ $name }}
            <hr>
            <livewire:events.third-child-component />
        </div>
        HTML;
    }
}
