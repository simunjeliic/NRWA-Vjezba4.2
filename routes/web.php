<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CountryLanguageController;

Route::resource('city', CityController::class);
Route::resource('country', CountryController::class)->middleware('auth');
Route::resource('admin', AdminUserController::class)->middleware('auth');
Route::resource('countrylanguage', CountryLanguageController::class)->middleware('auth');
Route::post('addrole/{id}', [AdminUserController::class, 'addrole'])->name('addrole')->middleware('auth');
Route::post('destroyrole/{id}', [AdminUserController::class, 'destroyrole'])->name('destroyrole')->middleware('auth');
Route::get('deleterole/{id}', [AdminUserController::class, 'deleterole'])->name('deleterole')->middleware('auth');
Route::get('users/createUser', [AdminUserController::class, 'createuser'])->name('users.createuser')->middleware('auth');
Route::post('users/storeUser', [AdminUserController::class, 'storeuser'])->name('admin.storeuser')->middleware('auth');
Route::get('users/editUser/{id}', [AdminUserController::class, 'edituser'])->name('admin.edituser')->middleware('auth');
Route::post('users/updateUser/{id}', [AdminUserController::class, 'updateuser'])->name('admin.updateuser')->middleware('auth');
Route::delete('users/{id}', [AdminUserController::class, 'deleteuser'])->name('admin.deleteuser')->middleware('auth');
Route::get('/action', [CityController::class, 'action'])->name('action')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
