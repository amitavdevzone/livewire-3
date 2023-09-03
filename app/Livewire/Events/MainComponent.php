<?php

namespace App\Livewire\Events;

use Exception;
use Livewire\Component;

class MainComponent extends Component
{
    public string $name = '';

    public function save()
    {
        $this->dispatch('got-name', $this->name);
    }

    public function updating($property, $value)
    {
        if ($value === 'bad') {
            throw new Exception('You cannot use this value');
        }
    }

    public function updated($property)
    {
        // if ($property === 'name') {
        //     $this->name = strtoupper($this->name);
        //     $this->name = $this->name . ' alter';
        // }
    }

    public function updatedName()
    {
        $this->name = strtoupper($this->name);
        $this->name = $this->name . ' alter specific';
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
