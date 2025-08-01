<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('permissions', function () {
    return view('permission.index');
})->middleware(['auth', 'verified','permission:permissions.view'])->name('permissions');

Route::get('roles', function () {
return view('role.index');
})->middleware(['auth', 'verified','permission:roles.view'])->name('roles');

Route::get('users', function () {
    return view('user.index');
})->middleware(['auth', 'verified','permission:users.view'])->name('users');



Route::get('tasks', function () {
    return view('task.index');
})->middleware(['auth', 'verified'])->name('tasks'); // ,'permission:tasks.view'
    
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';