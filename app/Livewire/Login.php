<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login(Request $request)
    {
        $validated = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return $this->redirect('/customers', navigate: true);
        }
        $this->addError('email_password', 'Email or password is not correct');
    }
    public function render()
    {
        return view('livewire.login')->extends('components.layouts.front');
    }
}
