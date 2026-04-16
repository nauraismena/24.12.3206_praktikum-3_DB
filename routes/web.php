<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

// CONTROLLER USER
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController as AdminEvent;

// CONTROLLER ADMIN
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\TransactionController;


//ROUTE USER

Route::get('/', [HomeController::class, 'index']);

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});

Route::get('/event/1', [EventController::class, 'show']);
Route::get('/checkout', [EventController::class, 'checkout']);
Route::get('/ticket', [EventController::class, 'ticket']);


//ROUTE ADMIN

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/events', [AdminEventController::class, 'index'])->name('events');

    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');

});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/events', [AdminEventController::class, 'index'])->name('events');

    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

    Route::post('/events/store', [EventController::class, 'store'])->name('events.store');

    Route::get('/events/edit/{id}', [EventController::class, 'edit'])->name('events.edit');

    Route::put('/events/update/{id}', [EventController::class, 'update'])->name('events.update');

    Route::delete('/events/delete/{id}', [EventController::class, 'destroy'])->name('events.delete');

});

use App\Http\Controllers\Admin\CategoryController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories.index');
});