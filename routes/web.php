<?php

use App\Livewire\{AllPosts, AllProducts, AllUsers, Calculator, Counter, CreatePosts, Dropdown, FileUpload, LoadingExample, MultiStep, Polling, RegisterUser, WireConfirm};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sample');
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
Route::get('/loading-example', LoadingExample::class, );
Route::get('/calculator', Calculator::class, );
Route::get('/all-posts', AllPosts::class, )->name('all-post');
Route::get('/create-posts', CreatePosts::class, )->name('create-post');
Route::get('/multi-step', MultiStep::class, );
Route::get('/wire-confirm', WireConfirm::class, );
