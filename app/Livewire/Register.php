<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    public function save()
    {

        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return $this->redirect('/customers', navigate: true);
    }

    public function render()
    {
        return view('livewire.register')->extends('components.layouts.front');
    }
}
