<?php

use App\Livewire\Counter;
use App\Livewire\CustomerAdd;
use App\Livewire\EventPage;
use App\Livewire\Todo\TodoList;
use App\Livewire\TodoView;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter/{user}', Counter::class);
Route::get('/todos', TodoList::class);
Route::get('/todo/{todo}', TodoView::class)->name('todo.view');
Route::get('/customer/create', CustomerAdd::class);
Route::get('/customer/{customer}', CustomerAdd::class);
Route::get('/events', EventPage::class);
