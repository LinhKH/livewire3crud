<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{
    public $name;
    public $email;
    public $phone;
    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|unique:customers'
        ]);

        Customer::create($validated);
        $this->reset();
        $this->js("alert('customer created succesfully!')");
    }
}
