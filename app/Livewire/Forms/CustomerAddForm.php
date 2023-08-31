<?php

namespace App\Livewire\Forms;

use App\Models\Customer;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Form;

class CustomerAddForm extends Form
{
    #[Locked]
    public int $id = 0;

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

    public function setCustomer(Customer $customer)
    {
        $this->id = $customer->id;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone_number = $customer->phone_number;
        $this->age = $customer->age;
        $this->country = $customer->country;
        $this->notes = $customer->notes;
    }

    public function save()
    {
        sleep(3);
        if ($this->id == 0) {
            Customer::create(
                $this->all(['name', 'email', 'phone_number', 'age', 'country', 'notes'])
            );
        } else {
            $this->update();
        }
    }

    private function update()
    {
        $data = $this->all();
        unset($data['id']);
        Customer::where('id', $this->id)->update($data);
    }
}
