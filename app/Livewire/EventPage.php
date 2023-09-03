<?php

namespace App\Livewire;

use App\Livewire\Events\ThirdChildComponent;
use Livewire\Component;

class EventPage extends Component
{
    public int $count = 0;

    public array $names = [
        'Amitav', 'Jhon', 'Jane'
    ];

    public function mount()
    {
        logger('Event mount hook');
    }

    public function sendToThird()
    {
        $this->dispatch('got-name', 'Checking')->to(ThirdChildComponent::class);
    }

    public function boot()
    {
        logger('Event boot hook');
    }

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.event-page');
    }
}
