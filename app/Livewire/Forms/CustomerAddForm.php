<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Attributes\Rule;
use Livewire\Form;

class CustomerAddForm extends Form
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
        Customer::create(
            $this->all(['name', 'email', 'phone_number', 'age', 'country', 'notes'])
        );
    }
}
