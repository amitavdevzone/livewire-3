<?php

namespace App\Livewire;

use App\Livewire\Events\ThirdChildComponent;
use Livewire\Component;

class EventPage extends Component
{
    public array $names = [
        'Amitav', 'Jhon', 'Jane'
    ];

    public function sendToThird()
    {
        $this->dispatch('got-name', 'Checking')->to(ThirdChildComponent::class);
    }

    public function render()
    {
        return view('livewire.event-page');
    }
}
