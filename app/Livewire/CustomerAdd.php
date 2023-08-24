<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CustomerAdd extends Component
{
    #[Rule('required|min:3')]
    public string $name = '';

    #[Rule('required|email')]
    public string $email = '';

    #[Rule('required')]
    public string $phone_number = '';

    #[Rule('required|numeric')]
    public $age = '';

    #[Rule('required')]
    public string $country = '';

    public string $notes = '';

    public function save()
    {
        $this->validate();

        Customer::create(
            $this->only(['name', 'email', 'phone_number', 'age', 'country', 'notes'])
        );
    }

    public function render()
    {
        return view('livewire.customer-add');
    }
}
