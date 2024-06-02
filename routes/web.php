<?php

use App\Livewire\CreateCustomer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/customers/create', App\Livewire\CreateCustomer::class);
    Route::get('/customer/edit/{customer}', App\Livewire\EditCustomer::class);
    Route::get('/customers', App\Livewire\ListCustomers::class);
    Route::get('/customer/{customer}', App\Livewire\ViewCustomer::class);
});
Route::middleware('guest')->group(function () {
    Route::get('/login', App\Livewire\Login::class)->name('login');
    Route::get('/register', App\Livewire\Register::class);
});
