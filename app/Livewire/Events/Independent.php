<?php

namespace App\Livewire\Events;

use Livewire\Attributes\On;
use Livewire\Component;

class Independent extends Component
{
    public string $name = 'Default';

    #[On('got-name')]
    public function gotName($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            <p>I am independent component</p>
            The name is: {{ $name }}
        </div>
        HTML;
    }
}
