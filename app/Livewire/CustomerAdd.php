<?php

namespace App\Livewire;

use App\Livewire\Forms\CustomerAddForm;
use App\Models\Customer;
use Livewire\Component;

class CustomerAdd extends Component
{
    public CustomerAddForm $form;

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
