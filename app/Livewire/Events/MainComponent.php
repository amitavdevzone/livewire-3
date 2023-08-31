<?php

namespace App\Livewire\Events;

use Livewire\Component;

class MainComponent extends Component
{
    public string $name = '';

    public function save()
    {
        $this->dispatch('got-name', $this->name);
    }

    public function render()
    {
        return <<<'HTML'
        <div>
           <p>This is the main component</p>
           <input type="text" wire:model="name" />
           <button wire:click="save">Click me</button>
           <hr>
           <livewire:events.child-component />
        </div>
        HTML;
    }
}
