<?php

use App\Livewire\{AllProducts, AllUsers, Counter, Dropdown, FileUpload, Polling, RegisterUser};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Livewire Study Routes
|--------------------------------------------------------------------------
|
|  This is the Routes of the Livewire Exoeriments
|
*/

Route::get('/counter', Counter::class, );
Route::get('/register-user', RegisterUser::class, );
Route::get('/dropdown', Dropdown::class, );
Route::get('/file-upload', FileUpload::class, );
Route::get('/all-users', AllUsers::class, );
Route::get('/all-products', AllProducts::class, );
Route::get('/poll', Polling::class, );
