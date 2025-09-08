<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('plantilla.app');
});

// Route::get('/', function () {
//     return view('plantilla.app');
// });

// Route::get('/app', function () {
//     return view('usuario.index');
// });

// Route::get('/usuario/action', function () {
//     return view('usuario.action');
// });

Route::resource('usuarios', UserController::class);
