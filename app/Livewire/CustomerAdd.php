<?php

namespace App\Livewire;

use App\Livewire\Forms\CustomerAddForm;
use App\Models\Customer;
use Livewire\Component;

class CustomerAdd extends Component
{
    public Customer $customer;

    public CustomerAddForm $form;

    public function mount(Customer $customer)
    {
        isset($customer->id) && $this->form->setCustomer($customer);
    }

    public function updated($name, $value)
    {
        $name = explode('.', $name)[1];
        $this->customer->update([
            $name => $value,
        ]);
    }

    public function save()
    {
        $this->validate();

        $this->form->save();
    }

    public function render()
    {
        return view('livewire.customer-add');
    }
}
