<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', Dashboard::class)->name('dashboard')->middleware('auth');

Route::get('/', Register::class)->name('register')->middleware('guest');
