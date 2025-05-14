<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Auth\SignUp;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\Billing;
use App\Livewire\Profile;
use App\Livewire\Tables;
use App\Livewire\StaticSignIn;
use App\Livewire\StaticSignUp;
use App\Livewire\Rtl;

use App\Livewire\LaravelExamples\UserProfile;
use App\Livewire\LaravelExamples\UserManagement;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return redirect('/login');
});

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/rtl', Rtl::class)->name('rtl');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
    
    //Trucks
    Route::get('/trucks', \App\Livewire\Trucks\Index::class)->name('trucks.index');
    Route::get('/trucks/create', \App\Livewire\Trucks\Create::class)->name('trucks.create');
    Route::get('/trucks/show/{truck}', \App\Livewire\Trucks\Show::class)->name('trucks.show');
    Route::get('/trucks/update/{truck}', \App\Livewire\Trucks\Edit::class)->name('trucks.edit');
    
    //Drivers
    Route::get('/drivers', \App\Livewire\Drivers\Index::class)->name('drivers.index');
    Route::get('/drivers/create', \App\Livewire\Drivers\Create::class)->name('drivers.create');
    Route::get('/drivers/show/{driver}', \App\Livewire\Drivers\Show::class)->name('drivers.show');
    Route::get('/drivers/update/{driver}', \App\Livewire\Drivers\Edit::class)->name('drivers.edit');
    
    Route::get('/clients', \App\Livewire\Clients\Index::class)->name('clients.index');
    Route::get('/clients/create', \App\Livewire\Clients\Create::class)->name('clients.create');
    Route::get('/clients/show/{client}', \App\Livewire\Clients\Show::class)->name('clients.show');
    Route::get('/clients/update/{client}', \App\Livewire\Clients\Edit::class)->name('clients.edit');
    
    Route::get('/orders', \App\Livewire\Orders\Index::class)->name('orders.index');
    Route::get('/orders/create', \App\Livewire\Orders\Create::class)->name('orders.create');
    Route::get('/orders/show/{order}', \App\Livewire\Orders\Show::class)->name('orders.show');
    Route::get('/orders/update/{order}', \App\Livewire\Orders\Edit::class)->name('orders.edit');
    
});

