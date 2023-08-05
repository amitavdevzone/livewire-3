<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class Counter extends Component
{
    public $count = 0;
    public User $user;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count > 0 && $this->count--;
    }

    #[Layout('components.layouts.app')]
    #[Title('Counter render')]
    public function render()
    {
        $count = 1;
        return view('livewire.counter');
    }
}
