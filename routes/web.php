<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome', ['name' => 'James']);
});

Route::get('/user/me', [UsersController::class, 'getProfileMe']);
Route::get('/u/{username}', [UsersController::class, 'getProfile'])->name('user-profile'); // esse name aqui é um alias para a rota, ou seja, sempre que eu quiser mudar o nome da rota, eu só mudo aqui
Route::get('/testHelpers', [UsersController::class, 'testHelpers']);
Route::get('/testValidation', [UsersController::class, 'testValidation']);
