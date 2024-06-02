<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class ListCustomers extends Component
{
    public $customer_id;

    public function confirmDelete($customer_id)
    {
        $this->customer_id = $customer_id;
    }
    #[On('destroy-customer')]
    public function destroyCustomer()
    {
        $customer = Customer::findOrFail($this->customer_id);

        $customer->delete();

        $this->dispatch('close-modal');
    }

    #[Computed()]
    public function customers()
    {
        return Customer::all();
    }
    public function render()
    {
        return view('livewire.list-customers');
    }
}
