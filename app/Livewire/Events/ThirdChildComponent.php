<?php

namespace App\Livewire\Events;

use Livewire\Attributes\On;
use Livewire\Component;

class ThirdChildComponent extends Component
{
    public string $name = 'Default Third Child';

    #[On('got-name')]
    public function gotNameThirdChild($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return <<<'HTML'
        <div>
            <p>This is third child component</p>
            The name is: {{ $name }}
        </div>
        HTML;
    }
}
