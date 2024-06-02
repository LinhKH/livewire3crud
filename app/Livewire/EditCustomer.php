<?php

namespace App\Livewire;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditCustomer extends Component
{
    public $id;
    public $name;
    public $email;
    public $phone;
    public $customer;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
        $this->id = $customer->id;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
    }


    public function update(Request $request)
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'max:255', Rule::unique('customers')->ignore($this->customer->id)],
            'phone' => ['required', 'max:255', Rule::unique('customers')->ignore($this->customer->id)],
        ]);

        $this->customer->update($validated);
        $this->reset();
        $this->js("alert('customer updated succesfully!')");
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }
}
