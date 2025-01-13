<?php

use App\Livewire\CartComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\HomeComponent;
use App\Livewire\LoginComponent;
use App\Livewire\ProductDetailsComponent;
use App\Livewire\RegisterComponent;
use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\ShopComponent;
use App\Livewire\User\UserDashboardComponent;
use App\Livewire\ParentComponent;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeComponent::class)->name('home');
Route::get('/bdsm', ParentComponent::class)->name('bdsm');
Route::get('/login', LoginComponent::class)->name('login');
Route::post('/logout', [LoginComponent::class, 'logout'])->name('logout');

Route::get('/register', RegisterComponent::class)->name('registerView');
Route::post('/register', [RegisterComponent::class, 'register'])->name('register');

Route::group(['middleware' => ['auth', 'admin']], function () {
Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('adminDashboard');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('userDashboard');
});

Route::get('/shop', ShopComponent::class)->name('shop');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/cart', CartComponent::class)->name('cart');
Route::get('/details', ProductDetailsComponent::class)->name('details');

