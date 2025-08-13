<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



   Route::controller(IndexController::class)->group(function(){
        Route::get('permissions', 'permissions')->middleware(['auth', 'verified','permission:permissions.view'])->name('permissions');
        Route::get('roles','roles')->middleware(['auth','verified','permission:roles.view'])->name('roles');
        Route::get('users','users')->middleware(['auth', 'verified','permission:users.view'])->name('users');
        Route::get('tasks','tasks')->middleware(['auth', 'verified','permission:tasks.view'])->name('tasks');
   });



// Route::get('permissions', function () {
//     return view('permission.index');
// })->middleware(['auth', 'verified','permission:permissions.view'])->name('permissions');

// Route::get('roles', function () {
// return view('role.index');
// })->middleware(['auth', 'verified','permission:roles.view'])->name('roles');

// Route::get('users', function () {
//     return view('user.index');
// })->middleware(['auth', 'verified','permission:users.view'])->name('users');



// Route::get('tasks', function () {
//     return view('task.index');
// })->middleware(['auth', 'verified','permission:tasks.view'])->name('tasks'); // ,'permission:tasks.view'
    
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';